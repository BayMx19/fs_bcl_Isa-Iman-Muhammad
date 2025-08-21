@extends('layouts.app-admin')

@section('content')
<div class="container">
    <h1>Master Jenis Kendaraan</h1>
    <a href="{{ route('admin.jenis-kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Jenis Kendaraan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenis as $j)
                <tr>
                    <td>{{ $j->nama }}</td>
                    <td>{{ $j->deskripsi }}</td>
                    <td>
                        <a href="{{ route('admin.jenis-kendaraan.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.jenis-kendaraan.destroy', $j->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jenis kendaraan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
