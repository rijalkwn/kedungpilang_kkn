<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rwrt;

class RwrtController extends Controller
{
    public function index()
    {
        $title = 'Rwrt';
        $rwrt = rwrt::all();
        return view('organisasi.rwrt.index', compact('rwrt', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Rwrt';
        $rwrt = rwrt::all();
        return view('organisasi.rwrt.create', compact('title', 'rwrt'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nosk' => 'required',
            'tmt' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'nosk.required' => 'No SK harus diisi',
            'tmt.required' => 'TMT harus diisi'
        ]);

        $input = $request->all();

        rwrt::create($input);

        return redirect('admin/rwrt')
            ->with('message', 'Data Rwrt berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rwrt = rwrt::findOrFail($id);
        return view('organisasi.rwrt.edit', compact('rwrt'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nosk' => 'required',
            'tmt' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'nosk.required' => 'No SK harus diisi',
            'tmt.required' => 'TMT harus diisi'
        ]);

        $input = $request->all();

        $rwrt = rwrt::findOrFail($id);
        $rwrt->update($input);

        return redirect('admin/rwrt')
            ->with('message', 'Data Rwrt berhasil diupdate');
    }

    public function destroy($id)
    {
        $rwrt = rwrt::findOrFail($id);
        $rwrt->delete();

        return redirect('admin/rwrt')
            ->with('message', 'Data Rwrt berhasil dihapus');
    }
}
