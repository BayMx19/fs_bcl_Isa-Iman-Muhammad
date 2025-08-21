@extends('layouts.app-admin')

@section('content')
<div class="container">
    <h1>Master Armada</h1>
    <a href="{{ route('admin.armada.create') }}" class="btn btn-primary mb-3">Tambah Armada</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No Armada</th>
                <th>Jenis Kendaraan</th>
                <th>Kapasitas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($armadas as $armada)
                <tr>
                    <td>{{ $armada->no_armada }}</td>
                    <td>{{ $armada->jenis_kendaraan }}</td>
                    <td>{{ $armada->kapasitas }}</td>
                    <td>{{ $armada->status }}</td>
                    <td>
                        <a href="{{ route('admin.armada.edit', $armada->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.armada.destroy', $armada->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus armada ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
