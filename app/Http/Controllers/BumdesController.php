<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bumdes;

class BumdesController extends Controller
{
    public function index()
    {
        $bumdes = Bumdes::all();
        $title = 'Bumdes';
        return view('organisasi.bumdes.struktur.index', compact('bumdes', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Bumdes';
        return view('organisasi.bumdes.struktur.create', compact('title'));
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

        Bumdes::create($input);

        return redirect('admin/bumdes')
            ->with('message', 'Data Bumdes berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        return view('organisasi.bumdes.struktur.edit', compact('bumdes'));
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

        $bumdes = Bumdes::findOrFail($id);
        $bumdes->update($input);

        return redirect('admin/bumdes')
            ->with('message', 'Data Bumdes berhasil diupdate');
    }

    public function destroy($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        $bumdes->delete();

        return redirect('admin/bumdes')
            ->with('message', 'Data Bumdes berhasil dihapus');
    }
}
