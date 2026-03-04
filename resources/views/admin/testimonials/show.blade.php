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
                    <div class="card-body">
                        <div class="col-md-6">
                            <img width="200px" class="img-thumbnail"
                                src="{{ asset(path: 'storage/testimonials/' . $testimonial->image) }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-input-form name="name" type="text" value="{{ $testimonial->name }}"
                                        read="readonly"></x-input-form>
                                </div>
                                <div class="form-group mb-3">
                                    <x-input-form name="position" type="text" value="{{ $testimonial->position }}"
                                        read="readonly"></x-input-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-input-form name="description" type="textarea" value="{{ $testimonial->description }}"
                                        read="readonly"></x-input-form>
                                </div>
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
