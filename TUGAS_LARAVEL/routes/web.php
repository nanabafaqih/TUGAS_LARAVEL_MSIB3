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
Route::get('/salam', function () {
    return "Dina Wahyuni Suciati";
});
Route::get('nilai', function () {
    return view('nilai');
});
Route::get('/nilai_Mahasiswa', function () {
    return view('nilai_Mahasiswa');
});
