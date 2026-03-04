@extends('admin.master')
@section('title', __('keywords.edit_member'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.edit_member') }}</strong>
                    </div>
                    <form action="{{ route('admin.ourteams.update', ['ourteam' => $ourteam]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="name" type="text"
                                            value="{{ $ourteam->name }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="position" type="text"
                                            value="{{ $ourteam->position }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="image" type="file"
                                            value="{{ $ourteam->image }}"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="facebook" type="url"
                                            value="{{ $ourteam->facebook }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="twitter" type="url"
                                            value="{{ $ourteam->twitter }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="linkedin" type="url"
                                            value="{{ $ourteam->linkedin }}"></x-input-form>
                                    </div>
                                </div> <!-- /.card -->
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.edit_member') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
