<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembiayaandesa;

class PembiayaandesaController extends Controller
{
    public function index()
    {
        $title = 'Pembiayaan Desa';
        $pembiayaandesa = Pembiayaandesa::all();
        return view('transparansi.apbddesa.pembiayaan.index', compact('title', 'pembiayaandesa'));
    }

    public function create()
    {
        $title = 'Tambah Pembiayaan Desa';
        return view('transparansi.apbddesa.pembiayaan.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required',
            'anggaran' => 'required',
            'realisasi' => 'required',
            'selisih' => 'required',
            'jenis' => 'required',
        ], [
            'kegiatan.required' => 'Sumber harus diisi',
            'anggaran.required' => 'Anggaran harus diisi',
            'realisasi.required' => 'Realisasi harus diisi',
            'selisih.required' => 'Selisih harus diisi',
            'jenis.required' => 'Jenis harus diisi',
        ]);

        $input = $request->all();

        Pembiayaandesa::create($input);

        return redirect('admin/pembiayaandesa')
            ->with('message', 'Data Pembiayaan Desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pembiayaandesa = Pembiayaandesa::findOrFail($id);
        return view('transparansi.apbddesa.pembiyaan.edit', compact('pembiayaandesa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan' => 'required',
            'anggaran' => 'required',
            'realisasi' => 'required',
            'selisih' => 'required',
            'jenis' => 'required',
        ], [
            'kegiatan.required' => 'Sumber harus diisi',
            'anggaran.required' => 'Anggaran harus diisi',
            'realisasi.required' => 'Realisasi harus diisi',
            'selisih.required' => 'Selisih harus diisi',
            'jenis.required' => 'Jenis harus diisi',
        ]);

        $input = $request->all();

        $pembiyaandesa = Pembiayaandesa::findOrFail($id);

        $pembiyaandesa->update($input);

        return redirect('admin/pembiayaandesa')
            ->with('message', 'Data Pembiayaan Desa berhasil diupdate');
    }

    public function destroy($id)
    {
        $pembiyaandesa = Pembiayaandesa::findOrFail($id);
        $pembiyaandesa->delete();
        return redirect('admin/pembiayaandesa')
            ->with('message', 'Data Pembiayaan Desa berhasil dihapus');
    }
}
