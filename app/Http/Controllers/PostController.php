<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        //validasi atau aturan penulisan (opsional tapi sangant penting)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);

        //buat postingan baru menggunakan data yang sudah divalidasi
        Post::create($validated);

        //redirect kembali ke halaman posts
        return redirect('/')->with('Success', 'Postingan baru berhasil dibuat');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post){
        $validate =  $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);
        

        $post -> update($validate);

        return redirect('/posts/' . $post->id)->with('Success', 'Postingan berhasil diubah');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect('/')->with('Success', 'Postingan berhasil dihapus');
    }



}

    
