<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;
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
Route::get('/buku0024',[datacontroller::Class,'buku0024']);
Route::get('/buku/cari',[datacontroller::Class,'cari']);
Route::get('/join0024',[datacontroller::Class,'join0024']);
Route::get('/join0024/cari',[datacontroller::Class,'carijoin']);