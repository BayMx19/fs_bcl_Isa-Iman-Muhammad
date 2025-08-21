<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisKendaraan;
use App\Models\JenisKendaraanModel;

class JenisKendaraanController extends Controller
{
    public function index()
    {
        $jenis = JenisKendaraanModel::orderBy('id','desc')->get();
        return view('admin.master-jenis-kendaraan.wrapper', compact('jenis'));
    }

    public function create()
    {
        return view('admin.master-jenis-kendaraan.render.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:m_jenis_kendaraan,nama',
            'deskripsi' => 'nullable|string',
        ]);

        JenisKendaraanModel::create($request->all());
        return redirect()->route('admin.jenis-kendaraan.index')->with('success','Jenis kendaraan berhasil ditambahkan.');
    }

    public function edit(JenisKendaraanModel $jenisKendaraan)
    {
        return view('admin.master-jenis-kendaraan.render.index', compact('jenisKendaraan'));
    }

    public function update(Request $request, JenisKendaraanModel $jenisKendaraan)
    {
        $request->validate([
            'nama' => 'required|unique:m_jenis_kendaraan,nama,'.$jenisKendaraan->id,
            'deskripsi' => 'nullable|string',
        ]);

        $jenisKendaraan->update($request->all());
        return redirect()->route('admin.jenis-kendaraan.index')->with('success','Jenis kendaraan berhasil diperbarui.');
    }

    public function destroy(JenisKendaraanModel $jenisKendaraan)
    {
        $jenisKendaraan->delete();
        return redirect()->route('admin.jenis-kendaraan.index')->with('success','Jenis kendaraan berhasil dihapus.');
    }
}
