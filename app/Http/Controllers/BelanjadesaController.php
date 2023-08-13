<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belanjadesa;

class BelanjadesaController extends Controller
{
    public function index()
    {
        $belanjadesa = Belanjadesa::all();
        $title = 'Belanja Desa';
        return view('transparansi.apbddesa.belanja.index', compact('belanjadesa', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Belanja Desa';
        return view('transparansi.apbddesa.belanja.create', compact('title'));
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
            'kegiatan.required' => 'Kegiatan harus diisi',
            'anggaran.required' => 'Anggaran harus diisi',
            'realisasi.required' => 'Realisasi harus diisi',
            'selisih.required' => 'Selisih harus diisi',
            'jenis.required' => 'Jenis harus diisi',
        ]);

        $input = $request->all();

        Belanjadesa::create($input);

        return redirect('admin/belanjadesa')
            ->with('message', 'Data Belanja Desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $belanjadesa = Belanjadesa::findOrFail($id);
        return view('transparansi.apbddesa.belanja.edit', compact('belanjadesa'));
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
            'kegiatan.required' => 'Kegiatan harus diisi',
            'anggaran.required' => 'Anggaran harus diisi',
            'realisasi.required' => 'Realisasi harus diisi',
            'selisih.required' => 'Selisih harus diisi',
            'jenis.required' => 'Jenis harus diisi',
        ]);

        $input = $request->all();

        $belanjadesa = Belanjadesa::findOrFail($id);
        $belanjadesa->update($input);

        return redirect('admin/belanjadesa')
            ->with('message', 'Data Belanja Desa berhasil diupdate');
    }

    public function destroy($id)
    {
        $belanjadesa = Belanjadesa::findOrFail($id);
        $belanjadesa->delete();

        return redirect('admin/belanjadesa')
            ->with('message', 'Data Belanja Desa berhasil dihapus');
    }
}
