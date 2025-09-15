@extends('layouts.input')
@section('title', 'Buat Postingan')

@section('content')
    <h1>Buat Postingan</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red; font-size: 0.8rem; margin-top: 0.25rem;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Deskripsi</label>
            <textarea name="body" id="body" rows="5">{{ old('body') }}</textarea>
            @error('body')
                <p style="color: red; font-size: 0.8rem; margin-top: 0.25rem;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"> Simpan</button>
    </form>
@endsection
