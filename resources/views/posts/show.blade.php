@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->user->name }}</p>

    <div>
        <strong>Kategori :</strong>
        @forelse ($post->categories as $category)
            <span>{{ $category->name }}</span>
        @empty
            <span>Tidak ada kategori</span>
        @endforelse
    </div>

    <div class="content">
        <p>{{ $post->body }}</p>
    </div>
    <hr style="margin-top: 2rem; border: none; border-top: 1px solid #eee;">
    <a href="/" style="display: inline-block; margin-top: 1rem;">&laquo; Kembali</a>

    @can('update-post', $post)
        <a href="/posts/{{ $post->id }}}/edit" style="display: inline-block; margin-top: 1rem; margin-left: 1rem;">Edit
            Postingan</a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block; margin-left: 1rem;">
            @csrf
            @method('delete')
            <button type="submit"
                style="background-color: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer;"
                onclick="return confirm('Hapus Postingan Ini?')">
                Hapus
            </button>
        </form>
    @endcan

@endsection
