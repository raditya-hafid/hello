<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - blog</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; color: #333; margin: 0; padding: 2rem; }
        .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .post { border-bottom: 1px solid #eee; padding: 1rem 0; }
        .post:last-child { border-bottom: none; }
        h1, h2 { margin: 0 0 1rem 0; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>