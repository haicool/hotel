<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a room to Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info">
<div class="container">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-6 bg-white py-3 rounded">
            <div class="d-flex p-2 bd-highlight mb-3">
                <a href="{{ route('room.index') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
            </div>
            <div>
                <form action="{{ route('room.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Category</label>
                        <select class="form-select" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ @$category->id }}">{{ @$category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select class="form-select" name="status_id">
                            @foreach($statuses as $status)
                                <option value="{{ @$status->id }}">{{ @$status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary">Store</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
