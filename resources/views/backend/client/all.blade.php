@extends('backend.layouts.app')

@section('title', __('labels.backend.api_clients.title').' | '.app_name())

@section('content')


    <div class="card">
        <div class="card-header">

            <h3 class="page-title d-inline">@lang('labels.backend.api_clients.title')</h3>
            <div class="float-md-right">
                <form id="generate-form" action="{{ route('admin.api-client.generate') }}" method="POST">
                    @csrf
                    <fieldset>
                        <div class="input-group">
                            <input type="text" name="client_name" class="form-control" placeholder="Client Name"
                                   required>
                            <div class="input-group-append" id="button-addon2">
                                <button class="btn btn-primary" type="submit">Generate</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>ID</th>
                                <th>SECRET</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $key => $client)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->secret}}</td>
                                    <td>{{$client->revoked?'Revoked':'Live'}}</td>
                                    <td>
                                        @if(!$client->revoked)
                                            <a class="btn btn-sm btn-danger" href="#" onclick="event.preventDefault();
                                                    document.getElementById('revoke-form-{{$client->id}}').submit();">Revoke</a>
                                        @else
                                            <a class="btn btn-sm btn-success" href="#" onclick="event.preventDefault();
                                                    document.getElementById('revoke-form-{{$client->id}}').submit();">Enable</a>
                                        @endif
                                        <form id="revoke-form-{{$client->id}}" action="{{ route('api-client.status') }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" name="client_id" value="{{$client->id}}">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $('#myTable').DataTable();
    </script>
@endpush