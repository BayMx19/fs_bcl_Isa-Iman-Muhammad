@extends('layouts.app-admin') 

@section('content')
<div class="container">
    <h2>{{ isset($armada) ? 'Edit Armada' : 'Tambah Armada' }}</h2>

    <form action="{{ isset($armada) ? route('admin.armada.update', $armada->id) : route('admin.armada.store') }}" method="POST">
        @csrf
        @if(isset($armada))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="no_armada" class="form-label">No Armada</label>
            <input type="text" name="no_armada" id="no_armada" class="form-control" 
                value="{{ old('no_armada', $armada->no_armada ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
                <option value="">-- Pilih Jenis Kendaraan --</option>
                @foreach($jenis as $j)
                    <option value="{{ $j->nama }}"
                        {{ (old('jenis_kendaraan', $armada->jenis_kendaraan ?? '') === $j->nama) ? 'selected' : '' }}>
                        {{ $j->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="kapasitas" class="form-label">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" class="form-control" 
                value="{{ old('kapasitas', $armada->kapasitas ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                @foreach(['Tersedia','Sedang Mengantar','Perbaikan'] as $status)
                    <option value="{{ $status }}" 
                        {{ (old('status', $armada->status ?? '') === $status) ? 'selected' : '' }}>
                        {{ $status }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            {{ isset($armada) ? 'Update Armada' : 'Simpan Armada' }}
        </button>
        <a href="{{ route('admin.armada.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
