@extends('layouts.input')

@section('title', 'edit ->' . $category->name)
    
@section('content')
    <h1>Edit Kategori</h1>
    <form action="/categories/{{ $category->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Simpan</button>
        </div>
    </form>
@endsection