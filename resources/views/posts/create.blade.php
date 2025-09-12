@extends('layouts.input')
@section('title', 'Buat Postingan')

@section('content')
    <h1>Buat Postingan</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="body">Deskripsi</label>
            <textarea name="body" id="body" rows="5" required></textarea>
        </div>
        <button type="submit"> Simpan</button>
    </form>
@endsection
