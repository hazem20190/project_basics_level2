@extends('admin.master')
@section('title', __('keywords.features'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.features') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- ADD ACTION BUTTON --}}
                                <x-action-button href="{{ route('admin.features.create') }}" type="add"
                                    name="{{ __('keywords.add_feature') }}"></x-action-button>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width=10%>S/N</th>
                                        <th width=15%>Title</th>
                                        <th>Description</th>
                                        <th width=10%>Icon</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($features->count() > 0)
                                        @foreach ($features as $feature)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $feature->title }}</td>
                                                <td>{{ $feature->description }}</td>
                                                <td><span class="{{ $feature->icon }}"></span></td>
                                                <td>{{ $feature->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.features.show', ['feature' => $feature]) }}"
                                                        type="show"></x-action-button>
                                                    {{-- EDIT ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.features.edit', ['feature' => $feature]) }}"
                                                        type="edit"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.features.destroy', $feature) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $features->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
