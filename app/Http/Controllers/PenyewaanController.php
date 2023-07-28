<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::all();
        return view('penyewaan.index', compact('penyewaan'));
    }

    public function create()
    {
        $title = 'Tambah Penyewaan';
        return view('penyewaan.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alat' => 'required',
            'harga' => 'required',
        ], [
            'alat.required' => 'Alat harus diisi',
            'harga.required' => 'Harga harus diisi',
        ]);

        $input = $request->all();

        Penyewaan::create($input);

        return redirect('admin/penyewaan')
            ->with('message', 'Data penyewaan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        return view('penyewaan.edit', compact('penyewaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alat' => 'required',
            'harga' => 'required'
        ], [
            'alat.required' => 'Alat harus diisi',
            'harga.required' => 'Harga harus diisi',
        ]);

        $input = $request->all();

        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->update($input);

        return redirect('admin/penyewaan')
            ->with('message', 'Data penyewaan berhasil diedit');
    }

    public function destroy($id)
    {
        $penyewaan = Penyewaan::findOrFail($id);
        $penyewaan->delete();

        return redirect('admin/penyewaan')
            ->with('message', 'Data penyewaan berhasil dihapus');
    }
}
