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

Route::get('/', 'GuestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard')->middleware('auth');


Route::group(['middleware' => 'auth'], function() {

    Route::get('/kursus', 'KursusController@index')->name('user.kursus.index');
    Route::get('/kursus/reminder', 'KursusController@reminder')->name('user.kursus.reminder');
    Route::get('/kursus/baru', 'KursusController@create')->name('user.kursus.create');
    Route::post('/kursus/baru', 'KursusController@store')->name('user.kursus.store');
    Route::get('/kursus/{id}/kemaskini', 'KursusController@edit')->name('user.kursus.edit');
    Route::patch('/kursus/{id}/kemaskini', 'KursusController@update')->name('user.kursus.update');
    Route::delete('/kursus/{id}', 'KursusController@destroy')->name('user.kursus.destroy');

    // Route::resource('kursus', 'KursusController');

    Route::get('/laporan', 'LaporanController@index')->name('user.laporan.index');

    Route::get('/profile', 'ProfileController@edit')->name('user.profile.edit');
    Route::patch('/profile', 'ProfileController@update')->name('user.profile.update');

    Route::group(['middleware' => ['role:admin']], function() {

        Route::post('users/datatables', 'Pengurusan\UserController@datatables')->name('users.datatables');
        Route::resource('users', 'Pengurusan\UserController')->except('show');

    });
    

});



// Route::get('/users', 'Pengurusan\UserController@index')->name('users.index');
// Route::get('/users/create', 'Pengurusan\UserController@create')->name('users.create');
// Route::post('/users/create', 'Pengurusan\UserController@store')->name('users.store');
// Route::get('/users/{id}/edit', 'Pengurusan\UserController@edit')->name('users.edit');
// Route::patch('/users/{id}', 'Pengurusan\UserController@update')->name('users.update');
// Route::delete('/users/{id}', 'Pengurusan\UserController@destroy')->name('users.destroy');
