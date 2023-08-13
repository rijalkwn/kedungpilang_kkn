<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\linmas;

class LinmasController extends Controller
{
    public function index()
    {
        $title = 'Linmas';
        $linmas = linmas::all();
        return view('organisasi.linmas.index', compact('linmas', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Linmas';
        $linmas = linmas::all();
        return view('organisasi.linmas.create', compact('title', 'linmas'));
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

        linmas::create($input);

        return redirect('admin/linmas')
            ->with('message', 'Data Linmas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $linmas = linmas::findOrFail($id);
        return view('organisasi.linmas.edit', compact('linmas'));
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

        $linmas = linmas::findOrFail($id);
        $linmas->update($input);

        return redirect('admin/linmas')
            ->with('message', 'Data Linmas berhasil diupdate');
    }

    public function destroy($id)
    {
        $linmas = linmas::findOrFail($id);
        $linmas->delete();

        return redirect('admin/linmas')
            ->with('message', 'Data Linmas berhasil dihapus');
    }
}
