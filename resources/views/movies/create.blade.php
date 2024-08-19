<!DOCTYPE html>
<html>
<head>
    <title>Add New Movie</title>
</head>
<body>
    <h1>Add New Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <label for="movie_name">Movie Name:</label>
        <input type="text" name="movie_name" required><br>

        <label for="movie_description">Movie Description:</label>
        <textarea name="movie_description" required></textarea><br>

        <label for="movie_gener">Movie Genre:</label>
        <input type="text" name="movie_gener" required><br>

        <button type="submit">Add Movie</button>
    </form>

    <a href="{{ route('movies.index') }}">Back to Movies List</a>
</body>
</html>
