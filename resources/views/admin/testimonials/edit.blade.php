@extends('admin.master')
@section('title', __('keywords.edit_testimonial'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.edit_testimonial') }}</strong>
                    </div>
                    <form action="{{ route('admin.testimonials.update', ['testimonial' => $testimonial]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="name" type="text"
                                            value="{{ $testimonial->name }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="position" type="text"
                                            value="{{ $testimonial->position }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="image" type="file"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="description" type="textarea"
                                            value="{{ $testimonial->description }}" rows="8"></x-input-form>
                                    </div>
                                </div> <!-- /.card -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.edit_testimonial') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
