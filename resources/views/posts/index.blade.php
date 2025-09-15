@extends('layouts.app')
@section('title', 'Daftar Postingan Blog')

@section('content')
        <h1>Daftar Postingan Blog</h1>
        @forelse($posts as $post)
            <div class="post">

                <a href="/posts/{{ $post->id }}">
                   <h2>{{ $post->title }}</h2>
                </a>
                <p style="font-size: 0.8rem; color: #666;"> @.{{ $post->user->name }}</p>

                <p>{{ Str::limit($post->body, 100) }}</p>

                <a href="/posts/{{ $post->id }}}/edit" style="display: inline-block; margin-top: 1rem; margin-left: 1rem;">Edit Postingan</a>
                <form action="/posts/{{ $post->id }}" method="POST" style="display: inline-block; margin-left: 1rem;">
                    @csrf
                    @method('delete')
                    <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer;" onclick="return confirm('Hapus Postingan Ini?')">
                        Hapus
                    </button>
                </form>
            </div>
        @empty
            <p>Belum ada Postingan !</p>
        @endforelse
    
@endsection

    
        
