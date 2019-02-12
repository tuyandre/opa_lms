<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Auth\User;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    use FileUploadTrait;
    private $tags;

    public function index()
    {
        if (!Gate::allows('blog_access')) {
            return abort(401);
        }
        // Grab all the blogs
        $blogs = Blog::all();
        // Show the page
        return view('backend.blogs.index', compact('blogs'));

    }


    /**
     * Display a listing of Lessons via ajax DataTable.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $request)
    {
        $has_view = false;
        $has_delete = false;
        $has_edit = false;
        $blogs = "";


        $blogs = Blog::query()->with('category')->orderBy('created_at', 'desc')->get();


        if (auth()->user()->can('blog_view')) {
            $has_view = true;
        }
        if (auth()->user()->can('blog_edit')) {
            $has_edit = true;
        }
        if (auth()->user()->can('blog_delete')) {
            $has_delete = true;
        }

        return DataTables::of($blogs)
            ->addIndexColumn()
            ->addColumn('actions', function ($q) use ($has_view, $has_edit, $has_delete, $request) {
                $view = "";
                $edit = "";
                $delete = "";
                if ($request->show_deleted == 1) {
                    return view('backend.datatable.action-trashed')->with(['route_label' => 'admin.blogs', 'label' => 'blog', 'value' => $q->id]);
                }
                if ($has_view) {
                    $view = view('backend.datatable.action-view')
                        ->with(['route' => route('admin.blogs.show', ['blog' => $q->id])])->render();
                }
                if ($has_edit) {
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => route('admin.blogs.edit', ['blog' => $q->id])])
                        ->render();
                    $view .= $edit;
                }

                if ($has_delete) {
                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => route('admin.blogs.destroy', ['lesson' => $q->id])])
                        ->render();
                    $view .= $delete;
                }

                return $view;

            })
            ->editColumn('course', function ($q) {
                return ($q->course) ? $q->course->title : 'N/A';
            })
            ->editColumn('image', function ($q) {
                return ($q->image != null) ? '<img height="50px" src="' . asset('storage/uploads/' . $q->image) . '">' : 'N/A';
            })
            ->addColumn('created', function ($q) {
                return $q->created_at->diffforhumans();
            })
            ->addColumn('comments', function ($q) {
                return $q->comments->count();
            })
            ->rawColumns(['image', 'actions'])
            ->make();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (!Gate::allows('blog_create')) {
            return abort(401);
        }
        $blogcategory = Category::select('title', 'id')->get();
        return view('blog.create', compact('blogcategory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('blog_create')) {
            return abort(401);
        }

        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'blog_category_id' => 'required',
        ],
            [
                'blog_category_id.required' => 'Please select category'
            ]);
        $blog = new Blog($request->except('files', 'image', 'tags'));
        $blog->slug = str_slug($request->title);
        $message = $request->get('content');
        $dom = new \DOMDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach ($images as $img) {

            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = storage_path("/app/public/uploads/blog/$filename.$mimetype");
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100)// encode file to the specified mimetype
                    ->save($filepath);
                $new_src = asset("storage/uploads/$filename.$mimetype");
                $dirname = dirname($filename);

                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-
        $blog->content = $dom->saveHTML();

        $picture = "";

//        if ($request->hasFile('image')) {
//            $file = $request->file('image');
//            $extension = $file->extension() ?: 'png';
//            $picture = str_random(10) . '.' . $extension;
//            $destinationPath = storage_path("/app/public/uploads/blog/");
//            $file->move($destinationPath, $picture);
//            $blog->image = $picture;
//
//        }
        $this->saveFiles($request);
        $blog->user_id = auth()->user()->id;
        $blog->image = $request->image;
        $blog->save();

        //Adding tags
        if ($request->tags != null) {
            $tag_ids = [];
            $tags = explode(',', $request->tags);
            foreach ($tags as $item) {
                $tag = Tag::where('slug', '=', str_slug($item, '-'))->first();
                if ($tag == null) {
                    $tag = new Tag();
                    $tag->name = $item;
                    $tag->slug = str_slug($item, '-');
                    $tag->save();
                }
                $tag_ids[] = $tag->id;
            }
            if ($tag_ids != null) {
                $blog->tags()->attach($tag_ids);
            }
        }

        if ($blog->id) {
            return redirect()->route('admin.blogs.index')->withFlashSuccess(__('alerts.backend.general.created'));
        } else {
            return redirect()->route('admin.blogs.index')->withFlashDanger(__('alerts.backend.general.error'));

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function show(Request $request)
    {
        if (!Gate::allows('blog_view')) {
            return abort(401);
        }

        $blog = Blog::find($request->id);
        $comments = $blog->comments;
        $tags = $blog->tags()->pluck('name')->implode(', ');
        return view('backend.blogs.show', compact('blog', 'comments', 'tags'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit(Request $request)
    {
        if (!Gate::allows('blog_edit')) {
            return abort(401);
        }
        $blog = Blog::where('id', '=', $request->id)->first();
        $blogcategory = Category::select('name', 'id')->get();
        if (count($blog->tags) > 0) {
            $tags = $blog->tags()->pluck('name')->implode(', ');
        } else {
            $tags = '';
        }
        return view('backend.blogs.edit', compact('blog', 'blogcategory', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function update(Request $request)
    {
        if (!Gate::allows('blog_edit')) {
            return abort(401);
        }

        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'blog_category_id' => 'required',
        ],
            [
                'blog_category_id.required' => 'Please select category'
            ]);

        $blog = Blog::findOrfail($request->id);
        $blog->slug = str_slug($request->title);
        $blog->save();

        $message = $request->get('content');
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                info($filename);
                $filepath = storage_path("/app/public/uploads/blog/$filename.$mimetype");
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    ->encode($mimetype, 100)// encode file to the specified mimetype
                    ->save($filepath);
                $new_src = asset("storage/uploads/blog/$filename.$mimetype");
            } // <!--endif
            else {
                $new_src = $src;
            }
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
        } // <!-
        $blog->content = $dom->saveHTML();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension() ?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = storage_path('app/public/uploads/blog');
            $file->move($destinationPath, $picture);
            $blog->image = $picture;
            $blog->save();
        }

        if ($request->tags != null) {
            $tag_ids = [];
            $tags = explode(',', $request->tags);
            foreach ($tags as $item) {
                $tag = Tag::where('slug', '=', str_slug($item, '-'))->first();
                if ($tag == null) {
                    $tag = new Tag();
                    $tag->name = $item;
                    $tag->slug = str_slug($item, '-');
                    $tag->save();
                }
                $tag_ids[] = $tag->id;
            }
            if ($tag_ids != null) {
                $blog->tags()->detach();
                $blog->tags()->attach($tag_ids);
            }
        }


        if ($blog->update($request->except('content', 'image', 'files', '_method', 'tags'))) {
            return redirect()->route('admin.blogs.index')->withFlashSuccess(__('alerts.backend.general.updated'));

        } else {
            return redirect()->route('admin.lessons.index')->withFlashDanger(__('alerts.backend.general.error'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Blog $blog
     * @return Response
     */
    public function destroy(Request $request)
    {
        if (!Gate::allows('blog_delete')) {
            return abort(401);
        }
        $blog = Blog::findOrfail($request->id);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->withFlashSuccess(__('alerts.backend.general.deleted'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogCommentRequest $request
     * @param Blog $blog
     *
     * @return Response
     */
    public function storeComment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required|min:3',
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        $blog = Blog::findOrfail($request->id);
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();
        return redirect('/blog/view/' . $blog->id);
    }

    /**
     * Delete all selected Lesson at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (!Gate::allows('blog_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Blog::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }



    /**
     * Get list of blogs in client side.
     * @return Response
     */
    public function getBlogList()
    {
        $blogs = Blog::paginate(10);
        return view('blog.frontend.blog-list', compact('blogs'));
    }

    /**
     * Get list of blogs in client side.
     * @param $slug
     * @return Response
     */

    public function getBlog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->first();
        if ($blog != null) {
            $comments = $blog->comments;
            $tags = $blog->tags()->pluck('name')->implode(', ');
            return view('blog.frontend.show', compact('blog', 'comments', 'tags'));
        } else {
            return response(view(404), 404);
        }
    }


    /**
     * Get list of blogs belongs to a category.
     * @param $slug
     * @return Response
     */

    public function getCategoryBlog($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();
        $blogs = $category->blogs()->paginate(10);
        if ($category != null) {
            return view('blog.frontend.category-blogs', compact('blogs', 'category'));
        } else {
            return response(view(404), 404);
        }
    }

    /**
     * Get list of blogs belongs to a tag.
     * @param $slug
     * @return Response
     */

    public function getTagBlog($slug)
    {
        $tag = Tag::where('slug', '=', $slug)->first();
        if ($tag != null) {
            $blogs = $tag->blogs()->paginate(10);
            return view('blog.frontend.tag-blogs', compact('blogs', 'tag'));
        } else {
            return response(view(404), 404);
        }
    }

    public function getAuthorBlog($id)
    {
        $author = User::findOrfail($id);
        if ($author != null) {
            $blogs = $author->blogs()->paginate(10);
            return view('blog.frontend.author-blogs', compact('blogs', 'author'));
        } else {
            return response(view(404), 404);
        }
    }


}
