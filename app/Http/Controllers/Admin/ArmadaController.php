<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\ArmadaModel;
use App\Models\JenisKendaraanModel;

class ArmadaController extends Controller
{
    public function index()
    {
        $armadas = ArmadaModel::orderBy('id', 'desc')->get();
        return view('admin.master-armada.wrapper', compact('armadas'));
    }

    public function create()
    {
        $jenis = JenisKendaraanModel::all();
        return view('admin.master-armada.render.index', compact('jenis'));    
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_armada' => 'required|unique:armadas',
            'jenis_kendaraan' => 'required',
            'kapasitas' => 'required|integer',
            'status' => 'required|in:Tersedia,Sedang Mengantar,Perbaikan',
        ]);

        ArmadaModel::create($request->all());
        return redirect()->route('admin.armada.index')->with('success','Armada berhasil ditambahkan.');
    }

    public function edit(ArmadaModel $armada)
    {
        $jenis = JenisKendaraanModel::all();
        return view('admin.master-armada.render.index', compact('armada', 'jenis'));
    }

    public function update(Request $request, ArmadaModel $armada)
    {
        $request->validate([
            'no_armada' => 'required|unique:armadas,no_armada,'.$armada->id,
            'jenis_kendaraan' => 'required',
            'kapasitas' => 'required|integer',
            'status' => 'required|in:Tersedia,Sedang Mengantar,Perbaikan',
        ]);

        $armada->update($request->all());
        return redirect()->route('admin.armada.index')->with('success','Armada berhasil diperbarui.');
    }

    public function destroy(ArmadaModel $armada)
    {
        $armada->delete();
        return redirect()->route('admin.armada.index')->with('success','Armada berhasil dihapus.');
    }
}
