<?php

namespace App\Http\Controllers;

use App\Models\Pendapatandesa;
use Illuminate\Http\Request;

class PendapatandesaController extends Controller
{
    public function index()
    {
        $title = 'Pendapatan Desa';
        $pendapatandesa = Pendapatandesa::all();
        return view('transparansi.apbddesa.pendapatan.index', compact('title', 'pendapatandesa'));
    }

    public function create()
    {
        $title = 'Tambah Pendapatan Desa';
        return view('transparansi.apbddesa.pendapatan.create', compact('title'));
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

        Pendapatandesa::create($input);

        return redirect('admin/pendapatandesa')
            ->with('message', 'Data Pendapatan Desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pendapatandesa = Pendapatandesa::findOrFail($id);
        return view('transparansi.apbddesa.pendapatan.edit', compact('pendapatandesa'));
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

        $pendapatandesa = Pendapatandesa::findOrFail($id);

        $pendapatandesa->update($input);

        return redirect('admin/pendapatandesa')
            ->with('message', 'Data Pendapatan Desa berhasil diupdate');
    }

    public function destroy($id)
    {
        $pendapatandesa = Pendapatandesa::findOrFail($id);
        $pendapatandesa->delete();

        return redirect('admin/pendapatandesa')
            ->with('message', 'Data Pendapatan Desa berhasil dihapus');
    }
}
