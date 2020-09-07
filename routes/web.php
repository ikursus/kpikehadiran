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

Route::get('/login', function() {
    return 'Selamat Datang Ke Halaman Login';
});

Route::redirect('/official/1/status/draft', 'https://www.perpaduan.gov.my/')->name('webrasmi');

Route::get('/profile/{username?}', function ($username = null) {
    
    // Sekiranya username adalah NULL, paparkan ayat default
    if (is_null($username))
    {
        return 'Tiada profile dijumpai. Sila daftar akaun';
    }
    // Jika tidak, paparkan nama profile
    return 'Ini adalah profile ' . $username;

})->where('username', '[A-Za-z0-9]+');;