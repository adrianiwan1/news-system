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
/*
Route::get('/', function () {
    return view('main');
});
*/

/*Route::get('/contact', function () {
    return view('contact');
});*/
// default view, all articles
Route::get('/ttt', function(){

    return view('temp2');
    
    });

Route::get('/',[CtrlViewdb::class,'show_arts']); // main page with all articles

Route::get('/article/{id}','App\Http\Controllers\CtrlViewdb@show_full_news'); // show selected article by id
Route::get('/register', function(){

return view('register');

});
