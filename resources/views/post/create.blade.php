<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Create</title>
</head>
<body>
    <h1>Create New Post</h1>
    {{-- <h2><a href="<?= # route('post.index') ?>">All Post</h2> --}}
    {{-- <form action="<?= #url('post/store') ?>" method="post"> --}}
        {{-- <?= # csrf_field() ?>  --}}
   
    <h2><a href="{{ route('post.index') }}">All Post </a></h2>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title Here"><br><br>
        <textarea name="details" cols="30" rows="10" placeholder="Details"></textarea><br><br>
        <button>Submit</button>
    </form>
</body>
</html>