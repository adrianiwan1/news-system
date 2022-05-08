<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlViewdb;
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
    return view('main');
});

/*Route::get('/contact', function () {
    return view('contact');
});*/
Route::get('/show',[CtrlViewdb::class,'show_data']);

Route::get('/temp', function () {
    return view('temp');
});

Route::get('/default', function () {
    return view('default');  // ważne
});

Route::get('/news', function () {
    return view('news');// ważne
});

Route::get('/news',[CtrlViewdb::class,'show_art']); // ważne

Route::get('/temp2', function () {
    return view('temp2');
});

Route::get('/fullnews', function () {
    return view('fullnews');
});