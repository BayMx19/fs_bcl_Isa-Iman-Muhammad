@extends('layouts.app-admin')

@section('content')
<div class="container">
    <h2>{{ isset($jenisKendaraan) ? 'Edit Jenis Kendaraan' : 'Tambah Jenis Kendaraan' }}</h2>

    <form action="{{ isset($jenisKendaraan) ? route('admin.jenis-kendaraan.update', $jenisKendaraan->id) : route('admin.jenis-kendaraan.store') }}" method="POST">
        @csrf
        @if(isset($jenisKendaraan))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" 
                   value="{{ old('nama', $jenisKendaraan->nama ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $jenisKendaraan->deskripsi ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($jenisKendaraan) ? 'Update' : 'Simpan' }}</button>
        <a href="{{ route('admin.jenis-kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
