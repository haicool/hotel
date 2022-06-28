@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-6 bg-white py-3 rounded">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <form action="{{ route('booking.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-9">
                        <label for="client_id">Client</label>
                        <select class="form-select" name="client_id" id="client_id">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3 pt-3">
                        <button type="button" class="btn btn-warning form-control mt-2" data-bs-toggle="modal"
                                data-bs-target="#add_client">
                            Add new
                        </button>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="room_id">Room</label>
                        <select class="form-select" name="room_id">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control"/>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="form">From</label>
                        <input type="datetime-local" name="from" id="from" class="form-control"/>
                    </div>

                    <div class="col">
                        <label for="to">To</label>
                        <input type="datetime-local" name="to" id="to" class="form-control"/>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Features</label>
                    <br />
                    @php($n=1)
                    @foreach($features as $feature)
                        <input type="checkbox" class="btn-check" name="feature_id[]" id="btncheck{{$n}}" value="{{$feature->id}}"
                               autocomplete="off"/>
                        <label class="btn btn-outline-success" for="btncheck{{$n++}}">{{$feature->name}}</label>
                    @endforeach
                </div>

                <div class="d-grid mt-3">
                    <button class="btn btn-primary">Book</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add_client" tabindex="-1" aria-labelledby="add_client_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_client_label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('booking.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Image:</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save changes" />
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
