@extends('admin.master')
@section('title', __('keywords.add_feature'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.add_feature') }}</strong>
                    </div>
                    <form action="{{ route('admin.features.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="title" type="text"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="icon" type="text"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="description" type="textarea"></x-input-form>
                                    </div>
                                </div> <!-- /.card -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.add_feature') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
