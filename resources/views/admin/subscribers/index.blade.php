@extends('admin.master')
@section('title', __('keywords.subscribers'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.subscribers') }}</h2>
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
                                        <th>Email</th>
                                        <th width=15%>Date</th>
                                        <th width=20%>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($subscribers->count() > 0)
                                        @foreach ($subscribers as $subscriber)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $subscriber->email }}</td>
                                                <td>{{ $subscriber->created_at->format('d M Y') }}</td>
                                                <td>

                                                    {{-- DELETE ACTION BUTTON --}}
                                                    <x-delete-button
                                                        href="{{ route('admin.subscribers.destroy', $subscriber) }}"></x-delete-button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        {{-- Empty Alert --}}
                                        <x-empty-alert></x-empty-alert>
                                    @endif
                                </tbody>
                            </table>
                            {{ $subscribers->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
