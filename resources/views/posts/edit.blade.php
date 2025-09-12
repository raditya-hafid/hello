@extends('layouts.input')
@section('title', 'Edit ->' . $post->title)

@section('content')
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
@endsection
