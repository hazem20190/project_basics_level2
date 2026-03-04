@extends('admin.master')
@section('title', __('keywords.testimonials'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.testimonials') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- ADD ACTION BUTTON --}}
                                <x-action-button href="{{ route('admin.testimonials.create') }}" type="add"
                                    name="{{ __('keywords.add_testimonial') }}"></x-action-button>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width=5%>S/N</th>
                                        <th width=15%>Name</th>
                                        <th>Position</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($testimonials->count() > 0)
                                        @foreach ($testimonials as $testimonial)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->position }}</td>
                                                <td>{{ $testimonial->description }}</td>
                                                <td><img class="rounded-circle" width="50px"
                                                        src="{{ asset('storage/testimonials/' . $testimonial->image) }}">
                                                </td>
                                                <td>{{ $testimonial->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.testimonials.show', ['testimonial' => $testimonial]) }}"
                                                        type="show"></x-action-button>
                                                    {{-- EDIT ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}"
                                                        type="edit"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.testimonials.destroy', $testimonial) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $testimonials->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
