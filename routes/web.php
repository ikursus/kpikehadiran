<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $jumlah_hari = 7;
    $kehadiran = 3;
    $baki = $jumlah_hari - $kehadiran;

    return view('welcome', compact('jumlah_hari', 'kehadiran', 'baki'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {

    $title = 'Halaman dashboard';
    $name = 'Amirol';

    // Cara pertama pass data
    // return view('user.dashboard', ['name' => $name]);
    // Cara kedua pass data
    // return view('user.dashboard')->with('name', $name)->with('title', $title);
    // Cara ketiga pass data
    return view('user.dashboard', compact('name', 'title'));
});

Route::get('/kursus', function () {
    return view('user.kursus.senarai');
});

Route::get('/kursus/baru', function () {
    return view('user.kursus.baru');
});

Route::post('/kursus/baru', function (Request $request) {
    $data = $request->all();
    return $data;
});

Route::get('/kursus/{id}/kemaskini', function () {
    return view('user.kursus.kemaskini');
});

Route::patch('/kursus/{id}/kemaskini', function (Request $request) {
    $data = $request->all();
    return $data;
});

Route::delete('/kursus/{id}', function () {
    return redirect('/kursus');
});

Route::get('/laporan', function () {
    return view('user.laporan.senarai');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::patch('/profile', function (Request $request) {
    $data = $request->all();
    return $data;
});
