<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; color: #333; padding: 2rem; }
        .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { border-bottom: 2px solid #eee; padding-bottom: 1rem; margin-bottom: 1rem; }
        .post { border-bottom: 1px solid #eee; padding: 1rem 0; }
        .post:last-child { border-bottom: none; }
        h2 { margin: 0 0 0.5rem 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Postingan Blog</h1>
        @forelse($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
        @empty
            <p>Belum ada Postingan!</p>
        @endforelse
    </div>
</body>
</html>