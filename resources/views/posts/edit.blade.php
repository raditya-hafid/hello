@extends('layouts.input')
@section('title', 'Edit ->' . $post->title)

@section('content')
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <p style="color: red; font-size: 0.8rem; margin-top: 0.25rem;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Edit Postingan</label>
            <textarea name="body" id="body" rows="5" required>{{ old('body') }}</textarea>
            @error('body')
                <p style="color: red; font-size: 0.8rem; margin-top: 0.25rem;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">
            Update!
        </button>
    </form>
@endsection
