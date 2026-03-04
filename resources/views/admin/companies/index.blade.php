@extends('admin.master')
@section('title', __('keywords.companies'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.companies') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- ADD ACTION BUTTON --}}
                                <x-action-button href="{{ route('admin.companies.create') }}" type="add"
                                    name="{{ __('keywords.add_company') }}"></x-action-button>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width=10%>S/N</th>
                                        <th>Image</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($companies->count() > 0)
                                        @foreach ($companies as $company)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ Storage::url('companies/' . $company->image) }}"
                                                        style="max-width: 100%; height: auto; background-color: gray;">
                                                </td>
                                                <td>{{ $company->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.companies.show', ['company' => $company]) }}"
                                                        type="show"></x-action-button>
                                                    {{-- EDIT ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.companies.edit', ['company' => $company]) }}"
                                                        type="edit"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.companies.destroy', $company) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $companies->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
