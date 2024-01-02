<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{ route('post.update', $post->id) }}" method="GET">
        @csrf
        @method('PUT')
        <input value="{{ $post->title }}" type="text" name="title" placeholder="Title Here"><br><br>
        <textarea name="details" cols="30" rows="10" placeholder="Details">{{ $post->details }}</textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
