<?php

use App\Ruangan;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->namespace('Admin')
->middleware('auth', 'admin')
->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('ruangan', 'RuanganController');

    Route::resource('peminjamanruangan', 'PeminjamanController');
});

Route::prefix('member')->namespace('Member')
->group(function(){
    Route::get('/dataruangan', 'DataRuanganController@index')->name('dataruangan');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');