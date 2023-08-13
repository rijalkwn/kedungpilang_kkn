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
use App\Models\BPD;
use App\Models\linmas;
use App\Models\karangtaruna;
use App\Models\rwrt;
use App\Models\pkk;
use App\Models\Bumdes;
use App\Models\Belanjadesa;
use App\Models\Pendapatandesa;
use App\Models\Pembiayaandesa;
use App\Models\Datadesa;

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
        return view('home.organisasi.bumdes.pupuk', compact(
            'pupuk',
            'title',
        ));
    }

    public function bumdes()
    {
        $title = 'Bumdes';
        $bumdes = Bumdes::all();
        return view('home.organisasi.bumdes.bumdes', compact(
            'title',
            'bumdes',
        ));
    }

    public function mitrabumdes()
    {
        $title = 'Mitra Bumdes';
        $mitrabumdes = Mitrabumdes::all();
        return view('home.organisasi.bumdes.mitrabumdes', compact(
            'mitrabumdes',
            'title',
        ));
    }

    public function penyewaanalat()
    {
        $title = 'Penyewaan Alat';
        $penyewaan = Penyewaan::all();
        return view('home.organisasi.bumdes.penyewaan', compact(
            'title',
            'penyewaan',
        ));
    }

    public function bpd()
    {
        $title = 'BPD';
        $bpd = BPD::all();
        return view('home.organisasi.bpd', compact(
            'title',
            'bpd',
        ));
    }

    //linmas
    public function linmas()
    {
        $title = 'Linmas';
        $linmas = Linmas::all();
        return view('home.organisasi.linmas', compact(
            'title',
            'linmas',
        ));
    }

    //pkk
    public function pkk()
    {
        $title = 'PKK';
        $pkkdesa = Pkk::where('tingkat', 'Desa Kedungpilang')->get();
        $pkkkedungpilang = Pkk::where('tingkat', 'Dusun Kedungpilang')->get();
        $pkkgambir = Pkk::where('tingkat', 'Dusun Gambir')->get();
        $pkkkunciombo = Pkk::where('tingkat', 'Dusun Kunciombo')->get();
        $pkkkedungbulu = Pkk::where('tingkat', 'Dusun Kedung Bulu')->get();
        $pkkkedungpadas = Pkk::where('tingkat', 'Dusun Kedung Padas')->get();

        return view('home.organisasi.pkk', compact(
            'title',
            'pkkkedungpilang',
            'pkkdesa',
            'pkkgambir',
            'pkkkunciombo',
            'pkkkedungbulu',
            'pkkkedungpadas',
        ));
    }

    //karang taruna
    public function karangtaruna()
    {
        $title = 'Karang Taruna';
        $karangtaruna = Karangtaruna::all();
        return view('home.organisasi.karangtaruna', compact(
            'title',
            'karangtaruna',
        ));
    }

    //rwrt
    public function rwrt()
    {
        $title = 'RW/RT';
        $rwrt = Rwrt::all();
        return view('home.organisasi.rwrt', compact(
            'title',
            'rwrt',
        ));
    }

    //apbddesa
    public function apbddesa()
    {
        $title = 'APBDesa';
        $belanjadesa = Belanjadesa::all();
        $pendapatandesa = Pendapatandesa::all();
        $pembiayaandesa = Pembiayaandesa::all();
        return view('home.transparansi.apbddesa', compact(
            'title',
            'belanjadesa',
            'pendapatandesa',
            'pembiayaandesa',
        ));
    }

    public function datadesa()
    {
        $title = 'Data Desa';
        $datadesa = Datadesa::latest()->get();
        return view('home.profil.datadesa', compact(
            'title',
            'datadesa',
        ));
    }

    public function informasilayanan()
    {
        $title = 'Informasi Layanan';
        return view('home.layanan.layanan', compact(
            'title',
        ));
    }
}
