<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all(); //tanpa eager loading
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get(); // ini dengan eager loading(catatan orderby berfungsi untuk menampilkan postingan terbaru)

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {

        //validasi atau aturan penulisan (opsional tapi sangant penting)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'categories' => 'required|array', //harus ada dan berupa array
            'categories.*' => 'exists:categories,id' // setiap item array harus ada di tabel categories
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->body = $validated['body'];

        $post->user_id = $request->user()->id;

        $post->save();

        // $postData = [
        //     'title' =>$validated['title'],
        //     'body' => $validated['body'],
        //     'user_id' => auth()->id()
        // ];

        // $Categoryids = $validated['categories'];

        // $post = Post::create($postData);

        $post->categories()->attach($validated['categories']);

        return redirect('/')->with('success', 'Berhasil');

        //buat postingan baru menggunakan data yang sudah divalidasi
        // Post::create($validated);

        //redirect kembali ke halaman posts
        return redirect('/')->with('Success', 'Postingan baru berhasil dibuat');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post, 'categories' => Category::all()]);
    }

    public function update(Request $request, Post $post)
    {

        Gate::authorize('update-post', $post);

        $validate =  $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);


        $post->update($validate);

        return redirect('/posts/' . $post->id)->with('Success', 'Postingan berhasil diubah');
    }

    public function destroy(Post $post)
    {

        Gate::authorize('update-post', $post);

        $post->delete();

        return redirect('/')->with('Success', 'Postingan berhasil dihapus');
    }
}
