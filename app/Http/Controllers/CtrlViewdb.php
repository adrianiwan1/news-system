<?php

namespace App\Http\Controllers;

use App\Models\Artykuly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;

class CtrlViewdb extends Controller
{
    public function show_arts()
    {
        
        $baza=db::table("artykuly")
        ->select("artykulyID","dataPublikacji","login","obrazek","tytul","tresc","artykuly.zbanowany")
        ->join('uzytkownicy','artykuly.autor','=','uzytkownicy.id')
        ->where("dataPublikacji","<=",now())
        ->where("artykuly.zbanowany","0")
        ->orderBy('dataPublikacji','DESC')
        ->paginate(5); //maginate method show records on one site
        

        return view('news', compact('baza'));

    }

    public function show_full_news($id)
    {
        
        
        $aa=db::table("artykuly")
        ->select("artykulyID","dataPublikacji","login","obrazek","tytul","tresc","artykuly.zbanowany")
        ->join('uzytkownicy','artykuly.autor','=','uzytkownicy.id')
        ->where("dataPublikacji","<=",now())
        ->where("artykuly.artykulyID",$id)
        ->where("artykuly.zbanowany","0")
        ->get(); //maginate method show records on one site
        //dd($aa);
    $komentarze=db::table('komentarze')
    ->select('uzytkownicy.login','data','tresc','ocena','komentarzeID')
    ->join('uzytkownicy','komentarze.uzytkownicyID','=','uzytkownicy.id')
    ->where('artykul',$id)
    ->where('komentarze.usuniety',"0")
    ->get();
       
       //return view('fullnews', compact('aa','komentarze'));
        
        //View::composer(['fullnews','comments'],compact('aa','komentarze'));
        return view('fullnews', compact('aa','komentarze'));
    }

    public function show_comments($id)
    {
        $komentarze=db::table('komentarze')
        ->select('uzytkownicy.login','data','tresc','ocena','komentarzeID')
        ->join('uzytkownicy','komentarze.uzytkownicyID','=','uzytkownicy.id')
        ->where('artykul',$id)
        ->where('komentarze.usuniety',"0")
        ->get();
        
        return view('ajax', compact('komentarze'));

    }
    
}
