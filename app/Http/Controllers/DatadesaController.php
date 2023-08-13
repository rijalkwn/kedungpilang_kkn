<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datadesa;

class DatadesaController extends Controller
{
    public function index()
    {
        $title = 'Data Desa';
        $datadesa = Datadesa::all();
        return view('profil.datadesa.index', compact('title', 'datadesa'));
    }

    public function create()
    {
        $title = 'Tambah Data Desa';
        return view('profil.datadesa.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'file' => 'required|mimes:pdf|max:10000',
        ], [
            'judul.required' => 'Judul harus diisi',
            'penjelasan.required' => 'Penjelasan harus diisi',
            'file.required' => 'File harus diisi',
            'file.mimes' => 'File harus berupa pdf',
            'file.max' => 'Ukuran file maksimal 10 MB',
        ]);

        $input = $request->all();

        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'files/datadesa/';
        $file->move($tujuan_upload, $nama_file);
        Datadesa::create([
            'judul' => $input['judul'],
            'penjelasan' => $input['penjelasan'],
            'file' => $nama_file,
        ]);

        return redirect('admin/datadesa')
            ->with('message', 'Data Data Desa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $datadesa = Datadesa::findOrFail($id);
        return view('profil.datadesa.edit', compact('datadesa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'file' => 'mimes:pdf|max:10000',
        ], [
            'judul.required' => 'Judul harus diisi',
            'penjelasan.required' => 'Penjelasan harus diisi',
            'file.mimes' => 'File harus berupa pdf',
            'file.max' => 'Ukuran file maksimal 10 MB',
        ]);

        $input = $request->all();

        $datadesa = Datadesa::findOrFail($id);

        if ($request->has('file')) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'files/datadesa/';
            $file->move($tujuan_upload, $nama_file);
            $datadesa->update([
                'judul' => $input['judul'],
                'penjelasan' => $input['penjelasan'],
                'file' => $nama_file,
            ]);
        } else {
            $datadesa->update([
                'judul' => $input['judul'],
                'penjelasan' => $input['penjelasan'],
            ]);
        }

        return redirect('admin/datadesa')
            ->with('message', 'Data Data Desa berhasil diubah');
    }

    public function destroy($id)
    {
        $datadesa = Datadesa::findOrFail($id);
        $datadesa->delete();
        return redirect('admin/datadesa')
            ->with('message', 'Data Data Desa berhasil dihapus');
    }
}
