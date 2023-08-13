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
// Route::get('/about', '\App\Http\Controllers\HomeController@index');
// Route::get('/contact', '\App\Http\Controllers\HomeController@index');
Route::get('/informasilayanan', '\App\Http\Controllers\HomeController@informasilayanan');
Route::get('/galeri', '\App\Http\Controllers\HomeController@galeri');
Route::get('/potensi', '\App\Http\Controllers\HomeController@potensi');
// Route::get('/datadesa', '\App\Http\Controllers\HomeController@data');

Route::get('/berita', [BeritaController::class, 'index'])->name('news.index');
Route::get('/berita{id}', [BeritaController::class, 'show'])->name('news.show');
Route::get('/umkm', [DetailumkmController::class, 'index'])->name('news.index');
Route::get('/umkm{id}', [DetailumkmController::class, 'show'])->name('news.show');
// Route::get('/sotk', '\App\Http\Controllers\HomeController@perangkat');

//login admin
Route::get('/login', '\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/login', '\App\Http\Controllers\AuthController@authenticated')->name('login.perform');
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
    //password
    Route::resource('admin/password', '\App\Http\Controllers\PasswordController')->middleware('auth');
    //pupuk
    Route::resource('admin/bumdes', '\App\Http\Controllers\BumdesController')->middleware('auth');
    Route::resource('admin/pupuk', '\App\Http\Controllers\PupukController')->middleware('auth');
    Route::resource('admin/penyewaan', '\App\Http\Controllers\PenyewaanController')->middleware('auth');
    Route::resource('admin/mitrabumdes', '\App\Http\Controllers\MitrabumdesController')->middleware('auth');
    Route::resource('admin/bpd', '\App\Http\Controllers\BPDController')->middleware('auth');
    Route::resource('admin/karangtaruna', '\App\Http\Controllers\KarangtarunaController')->middleware('auth');
    Route::resource('admin/rwrt', '\App\Http\Controllers\RwrtController')->middleware('auth');
    Route::resource('admin/linmas', '\App\Http\Controllers\LinmasController')->middleware('auth');
    Route::resource('admin/pkk', '\App\Http\Controllers\PkkController')->middleware('auth');
    Route::resource('admin/belanjadesa', '\App\Http\Controllers\BelanjadesaController')->middleware('auth');
    Route::resource('admin/pendapatandesa', '\App\Http\Controllers\PendapatandesaController')->middleware('auth');
    Route::resource('admin/pembiayaandesa', '\App\Http\Controllers\PembiayaandesaController')->middleware('auth');
    Route::resource('admin/datadesa', '\App\Http\Controllers\DatadesaController')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'ceklevel:superadmin']], function () {
    Route::resource('admin/user', '\App\Http\Controllers\UserController')->middleware('auth');
    Route::resource('admin/perangkat', '\App\Http\Controllers\PerangkatController')->middleware('auth');
    // Route::resource('admin/sambutan', '\App\Http\Controllers\SambutanController')->middleware('auth');
});


//informasi layanan
// Route::get('/beranda', function () {
//     return view('home.index');
// });
Route::get('/informasi', function () {
    $title = 'Informasi';
    return view('home.informasi', compact('title'));
});
Route::get('/kk', function () {
    $title = 'Kartu Keluarga';
    return view('home.layanan.kk', compact('title'));
});
Route::get('/ktp', function () {
    $title = 'Kartu Tanda Penduduk';
    return view('home.layanan.ktp', compact('title'));
});
Route::get('/pindahdatang', function () {
    $title = 'Pindah Datang';
    return view('home.layanan.pindahdatang', compact('title'));
});
Route::get('/kia', function () {
    $title = 'Kartu Identitas Anak';
    return view('home.layanan.kia', compact('title'));
});
Route::get('/tinggalsementara', function () {
    $title = 'Tinggal Sementara';
    return view('home.layanan.tinggalsementara', compact('title'));
});
Route::get('/aktakelahiran', function () {
    $title = 'Akta Kelahiran';
    return view('home.layanan.aktakelahiran', compact('title'));
});
Route::get('/aktaperkawinan', function () {
    $title = 'Akta Perkawinan';
    return view('home.layanan.aktaperkawinan', compact('title'));
});
Route::get('/aktakematian', function () {
    $title = 'Akta Kematian';
    return view('home.layanan.aktakematian', compact('title'));
});
Route::get('/aktaperceraian', function () {
    $title = 'Akta Perceraian';
    return view('home.layanan.aktaperceraian', compact('title'));
});
Route::get('/perubahannama', function () {
    $title = 'Perubahan Nama';
    return view('home.layanan.perubahannama', compact('title'));
});
Route::get('/aktapengakuananak', function () {
    $title = 'Akta Pengakuan Anak';
    return view('home.layanan.aktapengakuananak', compact('title'));
});
Route::get('/pengesahananak', function () {
    $title = 'Pengesahan Anak';
    return view('home.layanan.pengesahananak', compact('title'));
});
Route::get('/pengangkatananak', function () {
    $title = 'Pengangkatan Anak';
    return view('home.layanan.pengangkatananak', compact('title'));
});

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/visimisi', [ProfilController::class, 'visimisi']);
Route::get('/sotk', [ProfilController::class, 'struktur']);

Route::get('/bumdes', '\App\Http\Controllers\HomeController@bumdes');
ROute::get('/ketersediaanpupuk', '\App\Http\Controllers\HomeController@pupuk');
ROute::get('/mitrabumdes', '\App\Http\Controllers\HomeController@mitrabumdes');
ROute::get('/penyewaanalat', '\App\Http\Controllers\HomeController@penyewaanalat');
ROute::get('/bpd', '\App\Http\Controllers\HomeController@bpd');
ROute::get('/linmas', '\App\Http\Controllers\HomeController@linmas');
ROute::get('/karangtaruna', '\App\Http\Controllers\HomeController@karangtaruna');
ROute::get('/rwrt', '\App\Http\Controllers\HomeController@rwrt');
ROute::get('/pkk', '\App\Http\Controllers\HomeController@pkk');
ROute::get('/apbddesa', '\App\Http\Controllers\HomeController@apbddesa');
ROute::get('/datadesa', '\App\Http\Controllers\HomeController@datadesa');
