<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pkk;

class PkkController extends Controller
{
    public function index()
    {
        $title = 'Pkk';
        $pkk = pkk::all();
        return view('organisasi.pkk.index', compact('pkk', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Pkk';
        $pkk = pkk::all();
        return view('organisasi.pkk.create', compact('title', 'pkk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tingkat' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
        ]);

        $input = $request->all();

        pkk::create($input);

        return redirect('admin/pkk')
            ->with('message', 'Data Pkk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pkk = pkk::findOrFail($id);
        return view('organisasi.pkk.edit', compact('pkk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tingkat' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
        ]);

        $input = $request->all();

        $pkk = pkk::findOrFail($id);

        $pkk->update($input);

        return redirect('admin/pkk')
            ->with('message', 'Data Pkk berhasil diupdate');
    }

    public function destroy($id)
    {
        $pkk = pkk::findOrFail($id);

        $pkk->delete();

        return redirect('admin/pkk')
            ->with('message', 'Data Pkk berhasil dihapus');
    }
}
