@extends('admin.master')
@section('title', __('keywords.services'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.services') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- ADD ACTION BUTTON --}}
                                <x-action-button href="{{ route('admin.services.create') }}" type="add"
                                    name="{{ __('keywords.add_service') }}"></x-action-button>
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
                                    @if ($services->count() > 0)
                                        @foreach ($services as $service)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td><span class="{{ $service->icon }}"></span></td>
                                                <td>{{ $service->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                        type="show"></x-action-button>
                                                    {{-- EDIT ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                        type="edit"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.services.destroy', $service) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $services->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
