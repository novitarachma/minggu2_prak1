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
    echo "Selamat Datang";
});
Route::get('/about/{nama?}/{nim?}', function ($namaku='Rachma Novita Anggreani', $nim ='2031710062') {
    echo 'Namaku adalah '.$namaku.' dan NIM ku adalah '.$nim;
});
Route::get('/articles/{id?}', function ($id=null) {
    echo 'Halaman article dengan ID '.$id;
});