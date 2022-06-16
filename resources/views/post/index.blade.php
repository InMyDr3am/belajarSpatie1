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
                <a href="{{ route('post.create') }}" class="btn btn-dark">Add Post</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="35%">Title</th>
                        <th width="40%">Desc</th>
                        <th width="20%">Cover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $key=>$item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->desc }}</td>
                        <td><img src="{{$item->getFirstMediaUrl('cover', 'thumb')}}" / width="220px"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>