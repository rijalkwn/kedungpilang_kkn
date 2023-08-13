<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pupuk;

class PupukController extends Controller
{
    public function index()
    {
        $pupuk = Pupuk::all();
        return view('organisasi.bumdes.pupuk.index', compact('pupuk'));
    }

    public function create()
    {
        $title = 'Tambah Pupuk';
        return view('organisasi.bumdes.pupuk.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek_pupuk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'merek_pupuk.required' => 'Merek pupuk harus diisi',
            'harga.required' => 'Harga harus diisi',
            'stok.required' => 'Stok harus diisi',
        ]);

        $input = $request->all();

        Pupuk::create($input);

        return redirect('admin/pupuk')
            ->with('message', 'Data pupuk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pupuk = Pupuk::findOrFail($id);
        return view('organisasi.bumdes.pupuk.edit', compact('pupuk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merek_pupuk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            'merek_pupuk.required' => 'Nama pupuk harus diisi',
            'harga.required' => 'Harga harus diisi',
            'stok.required' => 'Stok harus diisi',
        ]);

        $input = $request->all();

        $pupuk = Pupuk::findOrFail($id);
        $pupuk->update($input);

        return redirect('admin/pupuk')
            ->with('message', 'Data pupuk berhasil diedit');
    }

    public function destroy($id)
    {
        $pupuk = Pupuk::findOrFail($id);
        $pupuk->delete();

        return redirect('admin/pupuk')
            ->with('message', 'Data pupuk berhasil dihapus');
    }
}
