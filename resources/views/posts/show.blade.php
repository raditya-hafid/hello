<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; color: #333; padding: 2rem; }
        .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { margin: 0 0 1.5rem 0; }
        .content { line-height: 1.6; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <div class="content">
            <p>{{ $post->body }}</p>
        </div>
        <hr style="margin-top: 2rem; border: none; border-top: 1px solid #eee;">
        <a href="/posts" style="display: inline-block; margin-top: 1rem;">&laquo; Kembali</a>
        <a href="/posts/{{ $post->id }}}/edit" style="display: inline-block; margin-top: 1rem; margin-left: 1rem;">Edit Postingan</a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block; margin-left: 1rem;">
            @csrf
            @method('delete')
            <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer;" onclick="return confirm('Hapus Postingan Ini?')">
                Hapus
            </button>
        </form>
    </div>
    
</body>
</html>