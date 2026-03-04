@extends('admin.master')
@section('title', __('keywords.edit_feature'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.edit_feature') }}</strong>
                    </div>
                    <form action="{{ route('admin.features.update', ['feature' => $feature]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="title" type="text"
                                            value="{{ $feature->title }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="icon" type="text"
                                            value="{{ $feature->icon }}"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="description" type="textarea"
                                            value="{{ $feature->description }}"></x-input-form>
                                    </div>
                                </div> <!-- /.card -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.edit_feature') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
