@extends('admin.master')
@section('title', __('keywords.show_company'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">{{ __('keywords.show_company') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <img src="{{ asset('storage/companies/' . $company->image) }}" alt="Company Image"
                                        class="img-fluid rounded shadow-sm border"
                                        style="max-width: 100%; height: auto; background-color: gray;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
