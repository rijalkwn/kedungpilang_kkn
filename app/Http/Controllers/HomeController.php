<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\HtSupporttp\Facades\DB;
use Illuminate\Support\Facades\Storage;


// use App\Models\Sliders;
use App\Models\Event;
use App\Models\News;
use App\Models\Perangkat;
use App\Models\Umkm;
use App\Models\Penyewaan;
use App\Models\Data;
use App\Models\Galeri;
use App\Models\Sambutan;
use App\Models\Service;
use App\Models\Testimoni;
use App\Models\Pupuk;
use App\Models\Mitrabumdes;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(6)->get();
        $perangkat = Perangkat::all();
        $umkm = Umkm::latest()->take(3)->get();
        $galeri = Galeri::latest()->take(6)->get();
        $sambutan = Sambutan::latest()->take(1)->get();
        $service = Service::all();
        $testimoni = Testimoni::all();
        $title = 'Beranda';
        return view('home.index', compact(
            'news',
            'perangkat',
            'umkm',
            'galeri',
            'sambutan',
            'service',
            'testimoni',
            'title'
        ));
    }

    public function event()
    {
        $event = Event::all();
        return view('home.event', compact(
            'event',
        ));
    }

    public function umkm()
    {
        $title = 'UMKM';
        $umkm = Umkm::all();
        return view('home.umkm', compact('umkm', 'title'));
    }
    public function galeri()
    {
        $title = 'Galeri';
        $galeri = Galeri::all();
        return view('home.galeri', compact(
            'galeri',
            'title',
        ));
    }

    public function potensi()
    {
        $title = 'Potensi';
        return view('home.profil.potensi', compact(
            'title',
        ));
    }

    public function data()
    {
        $data = Data::all();
        return view('home.data', compact(
            'data',
        ));
    }
    public function perangkat()
    {
        $title = 'Perangkat';
        $perangkat = Perangkat::all();
        return view('home.profil.sotk', compact(
            'perangkat',
            'title',
        ));
    }

    public function pupuk()
    {
        $title = 'Pupuk';
        $pupuk = Pupuk::all();
        return view('home.bumdes.pupuk', compact(
            'pupuk',
            'title',
        ));
    }

    public function bumdes()
    {
        $title = 'Bumdes';
        return view('home.bumdes.bumdes', compact(
            'title',
        ));
    }

    public function mitrabumdes()
    {
        $title = 'Mitra Bumdes';
        $mitrabumdes = Mitrabumdes::all();
        return view('home.bumdes.mitrabumdes', compact(
            'mitrabumdes',
            'title',
        ));
    }

    public function penyewaanalat()
    {
        $title = 'Penyewaan Alat';
        $penyewaan = Penyewaan::all();
        return view('home.bumdes.penyewaan', compact(
            'title',
            'penyewaan',
        ));
    }
}
