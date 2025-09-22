@extends('layouts.input')
@section('title', 'login')

@section('content')
    <h1>Login!</h1>

    <form action="/login" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old ('email')  }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
        </div>

        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <button type="submit">Login</button>
    </form>
@endsection
