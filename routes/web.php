<?php

use App\Http\Controllers\DuyuruController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DuyuruController::class, 'index']);
Route::get('/duyuru/{id}', [DuyuruController::class, 'show']);

/*
    Bolumumuz Hakkinda
*/

Route::get('/genel_bilgiler', function() {
    return view('genel_bilgiler');
});

Route::get('/vizyon_misyon', function() {
    return view('vizyon_misyon');
});

/*
    Kalite - Ic Kontrol
*/

Route::get('/kalite_politikamiz', function() {
    return view('kalite_politikamiz');
});

Route::get('/kalite_elcileri', function() {
    return view('kalite_elcileri');
});

Route::get('/anketler', function() {
    return view('anketler');
});

Route::get('/faaliyet_raporu', function() {
    return view('faaliyet_raporu');
});

Route::get('/dokumanlar', function() {
    return view('dokumanlar');
});

/*
    Akademik
*/

Route::get('/yonetim', function() {
    return view('yonetim');
});

Route::get('/akademik_kadro', function() {
    return view('akademik_kadro');
});

Route::get('/komisyonlar', function() {
    return view('komisyonlar');
});

/*
    Egitim - Ogretim
*/

Route::get('/lisans_egitimi', function() {
    return view('lisans_egitimi');
});

Route::get('/sinavlar', function() {
    return view('sinavlar');
});

Route::get('/sinavlar_io', function() {
    return view('sinavlar_io');
});

Route::get('/ders_katalogu', function() {
    return view('ders_katalogu');
});

Route::get('/ders_programi', function() {
    return view('ders_programi');
});

Route::get('/stajlar', function() {
    return view('stajlar');
});

Route::get('/muhendislik_tamamlama', function() {
    return view('muhendislik_tamamlama');
});

/*
    Ogrenci
*/

Route::get('/ogrenci_isleri_daire_baskanligi', function() {
    return view('ogrenci_isleri_daire_baskanligi');
});

Route::get('/ogrenci_bilgi_sistemi', function() {
    return view('ogrenci_bilgi_sistemi');
});

Route::get('/yeterlilikler', function() {
    return view('yeterlilikler');
});

Route::get('/istatistikler', function() {
    return view('istatistikler');
});

Route::get('/ogrenci_sayilari', function() {
    return view('ogrenci_sayilari');
});

Route::get('/sinav_kurallari', function() {
    return view('sinav_kurallari');
});

/*
    Erasmus
*/

Route::get('/ikili_anlasmalar', function() {
    return view('ikili_anlasmalar');
});

/*
    STE
*/

Route::get('/fakulte_ste_yonergesi', function() {
    return redirect('http://cmf.nku.edu.tr/STE-FakülteSTEYönergesi/0/s/11811/16437');
});

Route::get('/bolumumuz_ste_esaslari', function() {
    return view('bolumumuz_ste_esaslari');
});

Route::get('/cmf_ste_ortak_formlari', function() {
    return view('cmf_ste_ortak_formlari');
});

Route::get('/ilgili_evraklar', function() {
    return view('ilgili_evraklar');
});

/*
    Laboratuvar
*/

Route::get('/yazilim_laboratuvari', function() {
    return view('yazilim_laboratuvari');
});

Route::get('/donanim_laboratuvari', function() {
    return view('donanim_laboratuvari');
});



Route::get('/iletisim', function() {
    return view('iletisim');
});

Route::get('/bize_yazin', function() {
    return view('bize_yazin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
