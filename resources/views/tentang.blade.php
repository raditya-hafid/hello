<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: sans-serif; display: grid; place-items: center; height: 100vh; margin: 0; background-color: #f0f2f5;
        }
        .card { 
            background-color: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: center; 
        }
        h1 { color: #333; }
        p { color: #666; }
    </style>
    <title>About me</title>
</head>
<body>
    <div class="card">
        <h1>Hallo, perkenalkan</h1>
        <p>Nama saya, {{ $nama }}</p>
        <p>Saya seorang, {{ $pekerjaan }}</p>
    </div>
</body>
</html>