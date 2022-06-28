@extends('layouts.app')
@section('content')
    <div class="d-flex p-2 bd-highlight mb-3">
        <a href="{{ route('room.create') }}" class="btn btn-dark">Add Room</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Room Number</th>
            <th>Category</th>
            <th>Status</th>
            <th>Client</th>
        </tr>
        </thead>
        <tbody>
        @php($n=1)
        @foreach ($rooms as $room)
        <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $room->name }}</td>
            <td>{{ $room->Category->name }}</td>
            <td>{{ $room->Status->name }}</td>
            <td>@if(!empty($room->Client)) {{ $room->Client->name }} @endif</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
