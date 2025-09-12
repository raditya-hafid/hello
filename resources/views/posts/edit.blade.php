<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Postingan {{ $post->title }}</title>
    <style>
         body { font-family: sans-serif; background-color: #f4f4f9; color: #333; padding: 2rem; }
        .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input[type="text"], textarea { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #28a745; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="body">Edit Postingan</label>
                <textarea name="body" id="body" rows="5" required></textarea>
            </div>
            <button type="submit">
                Update!
            </button>
        </form>
    </div>
</body>
</html>