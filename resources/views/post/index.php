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
            <th> Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post){ ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->details ?></td>
                <td>
                    <a href="<?= url('post/show', $post->id) ?>">Show Details</a> ||
                    <a href="<?= url('post/edit', $post->id) ?>">Edit</a> ||
                    <!-- <a href="<?= url('post/delete', $post->id) ?>">delete</a> -->

                    <form action="<?= url('post/delete', $post->id) ?>" method="Post"> 
                    <?= csrf_field() ?> 
                    <input hidden type="text" name="_method" value="DELETE">
                    <button>Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>