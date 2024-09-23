@extends('layouts.app')

@section('content')
    <h1>Daftar Kategori</h1>
    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($kategori as $k)
            <li>{{ $k->nama }} - <a href="{{ route('kategori.edit', $k->id) }}">Edit</a> | 
                <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
