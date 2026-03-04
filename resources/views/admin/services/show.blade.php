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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-input-form name="title" type="text" value="{{ $service->title }}"
                                        read="readonly"></x-input-form>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <x-input-form name="icon" type="text" value="{{ $service->icon }}"
                                                read="readonly" />
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <span class="{{ $service->icon }} fa-2x text-primary"></span>
                                        </div>
                                    </div>
                                </div>


                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-input-form name="description" type="textarea" value="{{ $service->description }}"
                                        read="readonly"></x-input-form>
                                </div>
                            </div> <!-- /.card -->
                        </div>
                    </div>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
