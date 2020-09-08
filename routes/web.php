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
    return view('welcome');
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