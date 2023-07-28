<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitrabumdes;

class MitrabumdesController extends Controller
{
    public function index()
    {
        $mitrabumdes = Mitrabumdes::all();
        return view('mitrabumdes.index', compact('mitrabumdes'));
    }

    public function create()
    {
        $title = 'Tambah Mitra Bumdes';
        return view('mitrabumdes.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_usaha' => 'required',
            'deskripsi' => 'required',
            'roi' => 'required',
            'roa' => 'required',
            'roe' => 'required',
            'gpm' => 'required',
            'opm' => 'required',
            'npm' => 'required',
            'valuasi' => 'required'
        ], [
            'nama_usaha.required' => 'Nama usaha harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'roi.required' => 'ROI harus diisi',
            'roa.required' => 'ROA harus diisi',
            'roe.required' => 'ROE harus diisi',
            'gpm.required' => 'GPM harus diisi',
            'opm.required' => 'OPM harus diisi',
            'npm.required' => 'NPM harus diisi',
            'valuasi.required' => 'Valuasi harus diisi'
        ]);

        $input = $request->all();

        Mitrabumdes::create($input);

        return redirect('admin/mitrabumdes')
            ->with('message', 'Data mitra bumdes berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mitrabumdes = Mitrabumdes::findOrFail($id);
        return view('mitrabumdes.edit', compact('mitrabumdes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_usaha' => 'required',
            'deskripsi' => 'required',
            'roi' => 'required',
            'roa' => 'required',
            'roe' => 'required',
            'gpm' => 'required',
            'opm' => 'required',
            'npm' => 'required',
            'valuasi' => 'required'
        ], [
            'nama_usaha.required' => 'Nama usaha harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        $input = $request->all();

        $mitrabumdes = Mitrabumdes::findOrFail($id);
        $mitrabumdes->update($input);

        return redirect('admin/mitrabumdes')
            ->with('message', 'Data mitra bumdes berhasil diupdate');
    }

    public function destroy($id)
    {
        $mitrabumdes = Mitrabumdes::findOrFail($id);
        $mitrabumdes->delete();

        return redirect('admin/mitrabumdes')
            ->with('message', 'Data mitra bumdes berhasil dihapus');
    }
}
