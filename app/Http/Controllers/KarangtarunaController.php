<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karangtaruna;

class KarangtarunaController extends Controller
{
    public function index()
    {
        $title = 'Karangtaruna';
        $karangtaruna = karangtaruna::all();
        return view('organisasi.karangtaruna.index', compact('karangtaruna', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Karangtaruna';
        $karangtaruna = karangtaruna::all();
        return view('organisasi.karangtaruna.create', compact('title', 'karangtaruna'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
        ]);

        $input = $request->all();

        karangtaruna::create($input);

        return redirect('admin/karangtaruna')
            ->with('message', 'Data Karangtaruna berhasil ditambahkan');
    }

    public function edit($id)
    {
        $karangtaruna = karangtaruna::findOrFail($id);
        return view('organisasi.karangtaruna.edit', compact('karangtaruna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
        ]);

        $input = $request->all();

        $karangtaruna = karangtaruna::findOrFail($id);
        $karangtaruna->update($input);

        return redirect('admin/karangtaruna')
            ->with('message', 'Data Karangtaruna berhasil diupdate');
    }

    public function destroy($id)
    {
        $karangtaruna = karangtaruna::findOrFail($id);
        $karangtaruna->delete();

        return redirect('admin/karangtaruna')
            ->with('message', 'Data Karangtaruna berhasil dihapus');
    }
}
