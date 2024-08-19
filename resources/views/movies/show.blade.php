<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>Movie Details</h1>

    <p><strong>Name:</strong> {{ $movie->movie_name }}</p>
    <p><strong>Description:</strong> {{ $movie->movie_description }}</p>
    <p><strong>Genre:</strong> {{ $movie->movie_gener }}</p>

    <a href="{{ route('movies.index') }}">Back to Movies List</a>
</body>
</html>
