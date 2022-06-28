@extends('layouts.app')

@section('content')
    <div class="d-flex p-2 bd-highlight my-3">
        <a href="{{ route('client.create') }}" class="btn btn-dark">Add a Client</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $key=>$item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td><img src="{{$item->getFirstMediaUrl('avatar', 'thumb')}}" / width="120px"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
