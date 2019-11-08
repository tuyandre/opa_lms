@extends('layouts.app')
@push('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/css/core/colors/palette-gradient.css">
@endpush
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{$title}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body table-responsive">
                        <form action="{{route('app.save')}}" method="post">
                            @csrf
                            <input type="hidden" name="app_id" id="app_id" value="{{$app->id?:old('app_id')}}">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" name="name" id="name" placeholder="App Name" value="{{$app->name?:old('name')}}">
                                <div class="form-control-position">
                                    <i class="ft-at-sign warning"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                                <div class="form-control-position">
                                    <i class="ft-image warning"></i>
                                </div>
                                @if($app->thumbnail)
                                    <img src="{{$app->thumbnail}}" alt="Thumbnail" height="100px">
                                @endif
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description">{{$app->description?:old('description')}}</textarea>
                                <div class="form-control-position">
                                    <i class="ft-book warning"></i>
                                </div>
                            </fieldset>
                            <div class="form-actions right">
                                <a href="{{url('app/all')}}" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-scripts')
@endpush

@push('page-scripts')
    <script src="{{asset('/')}}/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
@endpush