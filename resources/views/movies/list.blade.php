<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>Movies</h1>
    <a href="/customers" class="btn btn-primary me-2">Customers</a>
    <a href="/movies" class="btn btn-warning text-white">Movies</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Price</th>
                <th>Author</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->price }}</td>
                <td>{{ $movie->author }}</td>
                <td>{{ $movie->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>