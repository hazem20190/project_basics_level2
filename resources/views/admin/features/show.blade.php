@extends('admin.master')
@section('title', __('keywords.show_feature'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.show_feature') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Title</label>
                                    <input type="text" id="simpleinput" class="form-control" name="title"
                                        value="{{ $feature->title }}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="icon">Icon</label>
                                    <div class="col-md-6">
                                        <span class="{{ $feature->icon }} fe-48 text-primary"></span>
                                    </div>
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" rows="4" name="description" readonly>{{ $feature->description }}</textarea>
                                    </div>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div>
                    </div>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
