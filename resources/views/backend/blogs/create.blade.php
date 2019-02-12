@extends('backend.layouts.app')

@push('after-styles')
    <link href="{{asset('plugins/components/switchery/dist/switchery.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <style>
        .select2-container--default .select2-selection--single {
            height: 35px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px;
        }
        .bootstrap-tagsinput{
            width: 100%!important;
            display: inline-block;
        }
        .bootstrap-tagsinput .tag{
            line-height: 1;
            margin-right: 2px;
            background-color: #2f353a ;
            color: white;
            padding: 3px;
            border-radius: 3px;
        }

    </style>
@endpush

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['admin.blogs.store'], 'files' => true,]) !!}
    {!! Form::hidden('model_id',0,['id'=>'lesson_id']) !!}

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.lessons.create')</h3>
            <div class="float-right">
                <a href="{{ route('admin.lessons.index') }}"
                   class="btn btn-success">@lang('labels.backend.lessons.view')</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @can('add-blog')
                        <h3 class="box-title pull-left">Create Blog</h3>
                        @can('view-blog')

                            <a class="btn btn-success pull-right" href="{{url('blog')}}">
                                <i class="icon-eye"></i> &nbsp; View Blogs
                            </a>
                        @endcan
                        <div class="clearfix"></div>
                        <hr>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                @can('add-blog')
                                    <div class="row">
                                        <form class="form-horizontal" enctype="multipart/form-data" method="post"
                                              action="{{url('blog/create')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <div class="col-sm-8 {{ $errors->first('title', 'has-error') }}">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="title" value="{{ old('title') }}"
                                                           placeholder="Enter Blog Title"
                                                           autofocus>
                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                                    @endif </div>
                                                <div class="col-sm-4 {{ $errors->first('blog_category_id', 'has-error') }}">
                                                    <select class="form-control" name="blog_category_id">
                                                        <option value="">--Select Category--</option>
                                                        @foreach($blogcategory as $item)
                                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('blog_category_id'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('blog_category_id') }}</strong>
                                    </span>
                                                    @endif </div>
                                            </div>
                                            <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                                                <div class="col-md-12">
                                                <textarea class="textarea form-control"
                                                          name="content">{{old('content')}}</textarea>
                                                    <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('content', ':message') }}
                                                </strong>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" data-role="tagsinput"
                                                           placeholder="Add tags here" value="{{old('tags')}}" name="tags">
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light ">
                                                        Publish
                                                    </button>
                                                    <button type="reset" class="btn btn-danger waves-effect waves-light ">
                                                        Clear
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @else
                        <h1 align="center">You are not authorised to View this page</h1>
                    @endcan
                </div>
            </div>
        </div>

    </div>
@endsection

@push('after-scripts')
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script src="{{asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <script>
        $('.editor').each(function () {
            CKEDITOR.replace($(this).attr('id'), {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
                toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                },
                    {
                        "name": "links",
                        "groups": ["links"]
                    },
                    {
                        "name": "paragraph",
                        "groups": ["list", "blocks"]
                    },
                    {
                        "name": "document",
                        "groups": ["mode"]
                    },
                    {
                        "name": "insert",
                        "groups": ["insert"]
                    },
                    {
                        "name": "styles",
                        "groups": ["styles"]
                    },
                    {
                        "name": "about",
                        "groups": ["about"]
                    }
                ],
                // Remove the redundant buttons from toolbar groups defined above.
                removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
            });
        });

        var uploadField = $('input[type="file"]');

        $(document).on('change','input[type="file"]',function () {
            var $this = $(this);
            $(this.files).each(function (key,value) {
                if(value.size > 10240){
                    alert('"'+value.name+'"'+'exceeds limit of maximum file upload size' )
                    $this.val("");
                }
            })
        })

    </script>
@endpush