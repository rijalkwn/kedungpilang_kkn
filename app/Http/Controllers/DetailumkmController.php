<?php

namespace App\Http\Controllers;

use App\Models\Umkm;

use Illuminate\Http\Request;

class DetailumkmController extends Controller
{
    public function index()
    {
        $title = 'UMKM';
        $umkm = Umkm::latest()->get();
        return view('home.umkm', compact('title', 'umkm'));
    }

    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        $otherUmkm = Umkm::where('id', '!=', $id)->get();
        $title = $umkm->title;
        return view('home.detailumkm', compact('umkm', 'otherUmkm', 'title'));
    }
}
