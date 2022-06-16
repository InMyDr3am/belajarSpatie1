<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload Image in Laravel 8 using Laravel Media Library by Spatie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="d-flex p-2 bd-highlight mb-3">
                <a href="{{ route('post') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
                <h2 class="ms-auto fs-5">Upload Image in Laravel 8 using Laravel Media Library by Spatie</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Desc</label>
                            <textarea class="form-control" name="desc"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Cover:</label>
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>PDF:</label>
                            <input type="file" name="pdf" class="form-control">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>