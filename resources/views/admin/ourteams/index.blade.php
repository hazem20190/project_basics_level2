@extends('admin.master')
@section('title', __('keywords.ourteams'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.ourteams') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- ADD ACTION BUTTON --}}
                                <x-action-button href="{{ route('admin.ourteams.create') }}" type="add"
                                    name="{{ __('keywords.add_member') }}"></x-action-button>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width=5%>S/N</th>
                                        <th width=15%>Name</th>
                                        <th>Position</th>
                                        <th>Image</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Linkedin</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($ourteams->count() > 0)
                                        @foreach ($ourteams as $ourteam)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ourteam->name }}</td>
                                                <td>{{ $ourteam->position }}</td>
                                                <td><img class="rounded-circle" width="50px"
                                                        src="{{ asset("storage/ourteams/{$ourteam->image}") }}">
                                                </td>
                                                <td>{{ $ourteam->facebook }}</td>
                                                <td>{{ $ourteam->twitter }}</td>
                                                <td>{{ $ourteam->linkedin }}</td>
                                                <td>{{ $ourteam->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button href="{{ route('admin.ourteams.show', $ourteam) }}"
                                                        type="show"></x-action-button>
                                                    {{-- EDIT ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.ourteams.edit', ['ourteam' => $ourteam]) }}"
                                                        type="edit"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.ourteams.destroy', ['ourteam' => $ourteam]) }}">
                                                    </x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $ourteams->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
