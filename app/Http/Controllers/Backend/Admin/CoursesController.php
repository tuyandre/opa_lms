<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Auth\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCoursesRequest;
use App\Http\Requests\Admin\UpdateCoursesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\Facades\DataTables;

class CoursesController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('course_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('course_delete')) {
                return abort(401);
            }
            $courses = Course::onlyTrashed()->ofTeacher()->get();
        } else {
            $courses = Course::ofTeacher()->get();
        }

        return view('backend.courses.index', compact('courses'));
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
        $courses = "";


        if (request('show_deleted') == 1) {
            if (! Gate::allows('course_delete')) {
                return abort(401);
            }
            $courses = Course::onlyTrashed()->ofTeacher()->get();
        } else {
            $courses = Course::ofTeacher()->get();
        }

        if (auth()->user()->can('course_view')) {
            $has_view = true;
        }
        if (auth()->user()->can('course_edit')) {
            $has_edit = true;
        }
        if (auth()->user()->can('course_delete')) {
            $has_delete = true;
        }

        return DataTables::of($courses)
            ->addColumn('actions', function ($q) use ($has_view, $has_edit, $has_delete, $request) {
                $view = "";
                $edit = "";
                $delete = "";
                if ($request->show_deleted == 1) {
                    return view('backend.datatable.action-trashed')->with(['route_label' => 'admin.courses', 'label' => 'lesson', 'value' => $q->id]);
                }
                if ($has_view) {
                    $view = view('backend.datatable.action-view')
                        ->with(['route' => route('admin.courses.show', ['lesson' => $q->id])])->render();
                }
                if ($has_edit) {
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => route('admin.courses.edit', ['lesson' => $q->id])])
                        ->render();
                    $view .= $edit;
                }

                if ($has_delete) {
                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => route('admin.courses.destroy', ['lesson' => $q->id])])
                        ->render();
                    $view .= $delete;
                }
                return $view;

            })
            ->editColumn('teachers',function ($q){
                $teachers = "";
                foreach ($q->teachers as $singleTeachers){
                    $teachers.= '<span class="label label-info label-many">'.$singleTeachers->name.' </span>';
                }
                return $teachers;
            })
            ->editColumn('course_image', function ($q) {
                return ($q->course_image != null) ? '<img height="50px" src="'.asset('storage/uploads/'.$q->course_image).'">' : 'N/A';
            })
            ->editColumn('published', function ($q) {
                return ($q->published == 1) ? "Yes" : "No";
            })
            ->rawColumns(['course_image','teachers','actions'])
            ->make();
    }


    /**
     * Show the form for creating new Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('course_create')) {
            return abort(401);
        }
        $teachers = \App\Models\Auth\User::whereHas('roles', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');

        return view('backend.courses.create', compact('teachers'));
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param  \App\Http\Requests\StoreCoursesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoursesRequest $request)
    {
        if (! Gate::allows('course_create')) {
            return abort(401);
        }
        $request->all();

        $request = $this->saveFiles($request);
        $course = Course::create($request->all());
        if(($request->slug == "") || $request->slug == null){
            $course->slug = str_slug($request->title);
            $course->save();
        }
        $teachers = \Auth::user()->isAdmin() ? array_filter((array)$request->input('teachers')) : [\Auth::user()->id];
        $course->teachers()->sync($teachers);

        return redirect()->route('admin.courses.index')->withFlashSuccess(trans('alerts.backend.general.created'));
    }


    /**
     * Show the form for editing Course.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }
        $teachers = \App\Models\Auth\User::whereHas('roles', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');

        $course = Course::findOrFail($id);

        return view('backend.courses.edit', compact('course', 'teachers'));
    }

    /**
     * Update Course in storage.
     *
     * @param  \App\Http\Requests\UpdateCoursesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoursesRequest $request, $id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }

        $request = $this->saveFiles($request);
        $course = Course::findOrFail($id);

        $course->update($request->all());
        if(($request->slug == "") || $request->slug == null){
            $course->slug = str_slug($request->title);
            $course->save();
        }
        $teachers = \Auth::user()->isAdmin() ? array_filter((array)$request->input('teachers')) : [\Auth::user()->id];
        $course->teachers()->sync($teachers);

        return redirect()->route('admin.courses.index')->withFlashSuccess(trans('alerts.backend.general.updated'));
    }


    /**
     * Display Course.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('course_view')) {
            return abort(401);
        }
        $teachers = User::get()->pluck('name', 'id');$lessons = \App\Models\Lesson::where('course_id', $id)->get();$tests = \App\Models\Test::where('course_id', $id)->get();

        $course = Course::findOrFail($id);

        return view('backend.courses.show', compact('course', 'lessons', 'tests'));
    }


    /**
     * Remove Course from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')->withFlashSuccess(trans('alerts.backend.general.deleted'));
    }

    /**
     * Delete all selected Course at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Course::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Course from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->restore();

        return redirect()->route('admin.courses.index')->withFlashSuccess(trans('alerts.backend.general.restored'));
    }

    /**
     * Permanently delete Course from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->forceDelete();

        return redirect()->route('admin.courses.index')->withFlashSuccess(trans('alerts.backend.general.deleted'));
    }
}
