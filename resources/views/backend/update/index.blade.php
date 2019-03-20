@extends('backend.layouts.app')

@section('title',  __('labels.backend.update.title').' | '.app_name())

@push('after-styles')

@endpush

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="page-title float-left">@lang('labels.backend.update.title')</h3>
                </div><!--card-header-->
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <h4>@lang('labels.backend.update.current_app_version') {{config('app.version')}}</h4>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>@lang('labels.backend.update.upload')</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('after-scripts')
    <script></script>
@endpush