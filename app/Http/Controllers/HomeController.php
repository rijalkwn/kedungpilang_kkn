<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\HtSupporttp\Facades\DB;

// use App\Models\Sliders;
use App\Models\Event;
use App\Models\News;
use App\Models\Perangkat;
use App\Models\Umkm;
use App\Models\Slider;
use App\Models\Data;
use App\Models\Galeri;
use App\Models\Sambutan;
use App\Models\Service;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->take(5)->get();
        $event = Event::all();
        $news = News::latest()->take(6)->get();
        $perangkat = Perangkat::all();
        $umkm = Umkm::latest()->take(3)->get();
        $data = Data::all();
        $galeri = Galeri::latest()->take(6)->get();
        $sambutan = Sambutan::latest()->take(1)->get();
        $service = Service::all();
        $testimoni = Testimoni::all();
        $title = 'Beranda';
        return view('home.index', compact(
            'sliders',
            'event',
            'news',
            'perangkat',
            'umkm',
            'data',
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
}
