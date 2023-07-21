<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil';
        return view('home.profil.profil', compact('title'));
    }

    public function visimisi()
    {
        $title = 'Visi Misi';
        return view('home.profil.visimisi', compact('title'));
    }

    public function struktur()
    {
        $perangkat = Perangkat::all();
        $title = 'Struktur Organisasi';
        return view('home.profil.sotk', compact('perangkat', 'title'));
    }
}
