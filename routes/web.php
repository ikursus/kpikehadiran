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

Route::get('/dashboard', 'DashboardController@index');

Route::get('/kursus', 'KursusController@index');
Route::get('/kursus/baru', 'KursusController@create');
Route::post('/kursus/baru', 'KursusController@store');
Route::get('/kursus/{id}/kemaskini', 'KursusController@edit');
Route::patch('/kursus/{id}/kemaskini', 'KursusController@update');
Route::delete('/kursus/{id}', 'KursusController@destroy');

// Route::resource('kursus', 'KursusController');

Route::get('/laporan', 'LaporanController@index');

Route::get('/profile', 'ProfileController@edit');
Route::patch('/profile', 'ProfileController@update');
