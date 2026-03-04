@extends('admin.master')
@section('title', __('keywords.edit_service'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.edit_service') }}</strong>
                    </div>
                    <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="title" type="text"
                                            value="{{ $service->title }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="icon" type="text"
                                            value="{{ $service->icon }}"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="description" type="textarea"
                                            value="{{ $service->description }}"></x-input-form>
                                    </div>
                                </div> <!-- /.card -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.edit_service') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
