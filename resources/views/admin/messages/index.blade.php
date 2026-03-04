@extends('admin.master')
@section('title', __('keywords.messages'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.messages') }}</h2>
                {{-- success alert --}}
                <x-success-alert></x-success-alert>
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width=10%>S/N</th>
                                        <th width=15%>Name</th>
                                        <th width=15%>Email</th>
                                        <th>Subject</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($messages->count() > 0)
                                        @foreach ($messages as $message)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->created_at->format('d M Y') }}</td>
                                                <td>
                                                    {{-- SHOW ACTION BUTTON --}}
                                                    <x-action-button
                                                        href="{{ route('admin.messages.show', ['message' => $message]) }}"
                                                        type="show"></x-action-button>
                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.messages.destroy', $message) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $messages->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
