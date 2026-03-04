@extends('admin.master')
@section('title', __('keywords.show_member'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <i class="fas fa-user-edit me-2" style="margin-right: 10px;"></i>
                        <h5 class="mb-0 mt-1">{{ $ourteam->name }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset("storage/ourteams/{$ourteam->image}") }}"
                                    class="img-fluid rounded-circle border" alt="{{ $ourteam->name }}" width="150">
                            </div>

                            <!-- بيانات العضو -->
                            <div class="col-md-8">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <x-input-form name="position" type="text" value="{{ $ourteam->position }}"
                                            read="readonly" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-form name="facebook" type="url" value="{{ $ourteam->facebook }}"
                                            read="readonly" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-form name="twitter" type="url" value="{{ $ourteam->twitter }}"
                                            read="readonly" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-form name="linkedin" type="url" value="{{ $ourteam->linkedin }}"
                                            read="readonly" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container -->
@endsection
