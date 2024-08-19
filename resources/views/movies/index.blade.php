<!DOCTYPE html>
<html>
<head>
    <title>All Movies</title>
</head>
<body>
    <h1>Movies List</h1>
    <a href="{{ route('movies.create') }}" class="btn">Add New Movie</a>


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
        @foreach ($movies as $Movie)
            <tr>
                <td>{{ $Movie->id }}</td>
                <td>{{ $Movie->movie_name }}</td>
                <td>{{ $Movie->movie_description }}</td>
                <td>{{ $Movie->movie_gener }}</td>
                <td>
                    <a href="{{ route('movies.edit', $Movie->id) }}">Edit</a>
                    <form action="{{ route('movies.destroy', $Movie->id) }}" method="POST" style="display:inline;">
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
