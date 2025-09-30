@extends('layouts.app')

@section('title', 'create kategori')
    
@section('content')
    <h1>Tambah kategori</h1>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection