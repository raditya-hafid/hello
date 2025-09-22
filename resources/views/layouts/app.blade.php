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
        .alert-success {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <nav style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <div>
                <a href="/">Home</a>   
            </div> 
            <div>
                @auth
                    <span>Hallo, {{ auth()->user()->name }}</span>
                    <form action="/logput" method="post" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: #007bff; cursor: pointer; padding: 0; margin-left: 1rem;">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/login">Login</a>
                    <a href="/register">Registrasi</a>
                @endguest
            </div>   
        </nav>

        @if (session('Success'))
            <div class="alert-success">
                {{ session('Success') }}
            </div>
        @endif
        

        @yield('content')
    </div>
</body>
</html>