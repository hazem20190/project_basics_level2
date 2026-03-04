@extends('admin.master')
@section('title', __('keywords.edit_settings'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.settings') }}</strong>
                    </div>
                    <x-success-alert></x-success-alert>
                    <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="address" type="text"
                                            value="{{ $setting->address }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="phone" type="text"
                                            value="{{ $setting->phone }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="email" type="email"
                                            value="{{ $setting->email }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="facebook" type="url"
                                            value="{{ $setting->facebook }}"></x-input-form>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-input-form name="twitter" type="url"
                                            value="{{ $setting->twitter }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="yotube" type="url"
                                            value="{{ $setting->yotube }}"></x-input-form>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="url" id="linkedin" class="form-control" name="linkedin"
                                            value="{{ $setting->linkedin }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-input-form name="instgram" type="url"
                                            value="{{ $setting->instagram }}"></x-input-form>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('keywords.edit_settings') }}</button>
                        </div>
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
