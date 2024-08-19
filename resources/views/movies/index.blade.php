<!DOCTYPE html>
<html>
<head>
    <title>All Movies</title>
</head>
<body>
    <h1>Movies List</h1>

    <a href="{{ route('movies.create') }}">Add New Movie</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->movie_description }}</td>
                <td>{{ $movie->movie_gener }}</td>
                <td>
                    <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
