<?php

namespace App\Http\Controllers;

use App\Models\Artykuly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CtrlViewdb extends Controller
{
    public function show_arts()
    {
        $baza=db::table("artykuly")
        ->select("artykulyID","dataPublikacji","login","obrazek","tytul","tresc","artykuly.zbanowany")
        ->join('uzytkownicy','artykuly.autor','=','uzytkownicy.uzytkownicyID')
        ->where("dataPublikacji","<=",gmdate('Y-m-d H:i:s', time()))
        ->where("artykuly.zbanowany","0")
        ->orderBy('dataPublikacji','DESC')
        ->paginate(5); //maginate method show records on one site
        //dd($baza);
        return view('news', compact('baza'));

    }

    public function show_full_news($id)
    {
        
        $aa=db::table("artykuly")
        ->select("artykulyID","dataPublikacji","login","obrazek","tytul","tresc","artykuly.zbanowany")
        ->join('uzytkownicy','artykuly.autor','=','uzytkownicy.uzytkownicyID')
        ->where("dataPublikacji","<=",gmdate('Y-m-d H:i:s', time()))
        ->where("artykuly.artykulyID",$id)
        ->where("artykuly.zbanowany","0")
        ->get(); //maginate method show records on one site
        //dd($aa);
        return view('fullnews', compact('aa'));
        //return $aa;
    //return view('fullnews',compact($aa));
    }
}
