<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtrlViewdb;
use App\Http\Controllers\CtrlUser;
use App\Http\Controllers\CtrlAdmin;
use App\Http\Controllers\CtrlMakeArticle;
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
Route::get('/article/{id}',[CtrlViewdb::class,'show_full_news']);
//Route::get('/article/{id}','App\Http\Controllers\CtrlViewdb@show_full_news'); // show selected article by id
Route::get('/register', function(){return view('register');});
//Route::post('/custom-register','App\Http\Controllers\CtrlUser@register')->name('register');
Route::post('/custom-register',[CtrlUser::class,'register'])->name('register');
Route::get('/login', function(){return view('login');});
Route::post('/custom-login',[CtrlUser::class,'login'])->name('login');
Route::get('/custom-logout',[CtrlUser::class,'logout'])->name('logout');
Route::get('/admin/artykul/dodaj', function(){
    if(Auth::User()->rola == 1)
    {
    return view('writenews');
    }else{
        Redirect()->to('/');
    }
    })->name('dodajartykul');
    Route::post('/admin/artykul/zapisz',[CtrlMakeArticle::class,'add_article'])->name('zapiszartykul');
    Route::post('/admin/artykul/usun',[CtrlMakeArticle::class,'delete_article'])->name('usunartykul');

Route::post('/komenarz/zapisz',[CtrlMakeArticle::class,'add_comment'])->name('zapiszkomentarz');
Route::post('/komenarz/usun',[CtrlMakeArticle::class,'delete_comment'])->name('usunkomentarz');

Route::get('/admin/all_users',[CtrlAdmin::class,'all_users'])->name('wszyscyurzytkownicy');
