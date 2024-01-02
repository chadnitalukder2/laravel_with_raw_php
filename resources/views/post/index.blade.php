<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <table border="1" width="80%">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->details }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}">Show Details</a> ||
                        <a href="{{ route('post.edit', $post->id) }}">Edit</a> ||
                        
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
