@extends('admin.master')
@section('title', __('keywords.add_member'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.add_member') }}</strong>
                    </div>
                    <form action="{{ route('admin.ourteams.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="name" type="text"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="position" type="text"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="image" type="file"></x-input-form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="facebook" type="url"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="twitter" type="url"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="linkedin" type="url"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.add_member') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
