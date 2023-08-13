<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BPD;

class BPDController extends Controller
{
    public function index()
    {
        $title = 'BPD';
        $bpd = BPD::all();
        return view('organisasi.bpd.index', compact('bpd', 'title'));
    }

    public function create()
    {
        $title = 'Tambah BPD';
        $bpd = BPD::all();
        return view('organisasi.bpd.create', compact('title', 'bpd'));
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

        BPD::create($input);

        return redirect('admin/bpd')
            ->with('message', 'Data BPD berhasil ditambahkan');
    }

    public function edit($id)
    {
        $bpd = BPD::findOrFail($id);
        return view('organisasi.bpd.edit', compact('bpd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nosk' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'nosk.required' => 'No SK harus diisi'
        ]);

        $input = $request->all();

        $bpd = BPD::findOrFail($id);
        $bpd->update($input);

        return redirect('admin/bpd')
            ->with('message', 'Data BPD berhasil diupdate');
    }

    public function destroy($id)
    {
        $bpd = BPD::findOrFail($id);
        $bpd->delete();

        return redirect('admin/bpd')
            ->with('message', 'Data BPD berhasil dihapus');
    }
}
