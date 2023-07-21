<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DetailumkmController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', '\App\Http\Controllers\HomeController@index');
Route::get('/beranda', '\App\Http\Controllers\HomeController@index');
Route::get('/about', '\App\Http\Controllers\HomeController@index');
Route::get('/contact', '\App\Http\Controllers\HomeController@index');
Route::get('/event', '\App\Http\Controllers\HomeController@event');
Route::get('/galeri', '\App\Http\Controllers\HomeController@galeri');
Route::get('/datadesa', '\App\Http\Controllers\HomeController@data');
// Route::get('/berita', '\App\Http\Controllers\HomeController@news');
Route::get('/berita', [BeritaController::class, 'index'])->name('news.index');
Route::get('/berita{id}', [BeritaController::class, 'show'])->name('news.show');
Route::get('/umkm', [DetailumkmController::class, 'index'])->name('news.index');
Route::get('/umkm{id}', [DetailumkmController::class, 'show'])->name('news.show');
// Route::get('/sotk', '\App\Http\Controllers\HomeController@perangkat');

//login admin
Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@authenticated');
Route::get('/logout', '\App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['auth', 'ceklevel:superadmin,admin']], function () {
    //dashboard
    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index');
    Route::resource('admin/sliders', '\App\Http\Controllers\SliderController')->middleware('auth');
    // Route::resource('admin/services', '\App\Http\Controllers\ServiceController')->middleware('auth');
    Route::resource('admin/umkm', '\App\Http\Controllers\UmkmController')->middleware('auth');
    // Route::resource('admin/data', '\App\Http\Controllers\DataController')->middleware('auth');
    Route::resource('admin/news', '\App\Http\Controllers\NewsController')->middleware('auth');
    Route::resource('admin/galeri', '\App\Http\Controllers\GaleriController')->middleware('auth');
    // Route::resource('admin/event', '\App\Http\Controllers\EventController')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'ceklevel:superadmin']], function () {
    Route::resource('admin/user', '\App\Http\Controllers\UserController')->middleware('auth');
    Route::resource('admin/perangkat', '\App\Http\Controllers\PerangkatController')->middleware('auth');
    Route::resource('admin/sambutan', '\App\Http\Controllers\SambutanController')->middleware('auth');
});


//informasi layanan
// Route::get('/beranda', function () {
//     return view('home.index');
// });
Route::get('/informasi', function () {
    return view('home.informasi');
});
Route::get('/kk', function () {
    return view('home.layanan.kk');
});
Route::get('/ktp', function () {
    return view('home.layanan.ktp');
});
Route::get('/pindahdatang', function () {
    return view('home.layanan.pindahdatang');
});
Route::get('/kia', function () {
    return view('home.layanan.kia');
});
Route::get('/tinggalsementara', function () {
    return view('home.layanan.tinggalsementara');
});
Route::get('/aktakelahiran', function () {
    return view('home.layanan.aktakelahiran');
});
Route::get('/aktaperkawinan', function () {
    return view('home.layanan.aktaperkawinan');
});
Route::get('/aktakematian', function () {
    return view('home.layanan.aktakematian');
});
Route::get('/aktaperceraian', function () {
    return view('home.layanan.aktaperceraian');
});
Route::get('/perubahannama', function () {
    return view('home.layanan.perubahannama');
});
Route::get('/aktapengakuananak', function () {
    return view('home.layanan.aktapengakuananak');
});
Route::get('/pengesahananak', function () {
    return view('home.layanan.pengesahananak');
});
Route::get('/pengangkatananak', function () {
    return view('home.layanan.pengangkatananak');
});


// Route::get('/datadesa', function(){
//     return view('home.datadesa');
// });
// Route::get('/event', function(){
//     return view('home.event');
// });


//profil
// Route::get('/profil', function () {
//     return view('home.profil.profil');
// });
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/visimisi', [ProfilController::class, 'visimisi']);
Route::get('/sotk', [ProfilController::class, 'struktur']);
// Route::get('/asetdesa', function () {
//     return view('home.profil.aset');
// });
// Route::get('/kelembagaan', function () {
//     return view('home.profil.kelembagaan');
// });
// Route::get('/potensi', function () {
//     return view('home.profil.potensi');
// });
// Route::get('/sejarah', function () {
//     return view('home.profil.sejarah');
// });
// Route::get('/sotk', function(){
//     return view('profil.sotk');
// });
// Route::get('/visimisi', function () {
//     return view('home.profil.visimisi');
// });

//galeri
// Route::get('/galeri', function(){
//     return view('galeri.galeri');
// });

// //umkm
// Route::get('/umkm', function(){
//     return view('home.umkm');
// });

//berita
// Route::get('/berita', function(){
//     return view('home.news');
// });