@extends('layouts.input')
@section('title', 'Register')
    
@section('content')
    <h1>Buat Akun</h1>
    <form action="/register" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Register</button>
    </form>
@endsection