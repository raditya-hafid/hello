@extends('layouts.app')

@section('title', 'Manajement Content')

@section('content')
    <h1>Manajemen Kategory</h1>
    <a href="{{ route('categories.create') }}" style="display: inline-block; margin-bottom: 1rem"> + Tambah Kategori</a>
    <table>
        <thead>
            <tr>
                <th style="padding: 8px;">Nama</th>
                <th style="padding: 8px;">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td style="padding: 8px;">{{ $category->name }}</td>
                    <td style="padding: 8px; width: 150px;">
                        <a href="{{ route('categories.edit', $category->id) }}">edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Yakin ingin hapus?')" style="background:none; border:none; color:red; cursor:pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" style="padding: 8px; text-align: center;"> Tidak ada kategori</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
