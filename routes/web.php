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
Route::get('/bukuekspor', 'App\Http\Controllers\BukuController@index');
Route::get('/bukuekspor/export_excel', 'App\Http\Controllers\BukuController@export_excel');
Route::get('/index', function () {
    return view('index0082');
});

Route::get('/databuku', function () {
    return view('databuku0082');
});
Route::get('/databuku','App\Http\Controllers\MainControll@databuku');

Route::get('/rakbuku', function () {
    return view('rakbuku0082');
});
Route::get('/rakbuku','App\Http\Controllers\MainControll@rakbuku');


Route::get('/user', function () {
    return view('user0082');
});
Route::get('/user','App\Http\Controllers\MainControll@user');