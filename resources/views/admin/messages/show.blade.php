@extends('admin.master')
@section('title', __('keywords.show_message'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.show_message') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        value="{{ $message->name }}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        value="{{ $message->email }}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" class="form-control" name="subject"
                                        value="{{ $message->subject }}" readonly>
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="message">message</label>
                                        <textarea class="form-control" id="message" rows="8" name="message" readonly>
                                                {{ $message->message }}</textarea>
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
