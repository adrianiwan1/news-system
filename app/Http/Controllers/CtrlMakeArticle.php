<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Purifier;

class CtrlMakeArticle extends Controller
{
    public function add_article(Request $request)
    {
        //$data = $request->all();
        //dd($request);
        
    

        $image = $request->file('image')->store('imagearticles');
        
        $baza=db::table('artykuly')
        ->insert([
            'dataDodania' => now(),
            'dataPublikacji' => $request -> date,
            'autor' => Auth::id(),
            'tytul' => $request -> tytul,
            'tresc' => Purifier::clean($request -> text),
            'obrazek' => $image,
            'zbanowany' => '0'
        ]);
        return redirect()->to('/');
    }

    public function delete_article(Request $request)
    {
        $baza=db::table('artykuly')
        ->where('dataPublikacji',$request->data)
        ->where('artykulyID',$request->artykulyID)
        ->delete();

        return redirect()->to('/');
    }

    public function edit_article(REquest $request)
    {
        $baza::table('artykuly')
        ->get();
        return Redirect()->to('/');
    }

    public function add_comment(Request $request)
    {
        $baza=db::table('komentarze')
        ->insert([
            'data' => $request -> data,
            'uzytkownicyID' => $request -> uzytkownicyID,
            'ocena' => '0',
            'tresc' => Purifier::clean($request -> tresc),
            'artykul' => $request -> artykul,
            'usuniety' => '0'
        ]);
        //dd($baza);
        return redirect()->to($request->url);
    }

    public function delete_comment(Request $request)
    {
        $baza=db::table('komentarze')
        ->where('data',$request->data)
        ->where('komentarzeID',$request->komentarzeID)
        ->delete();

        return redirect()->to($request->url);
    }
}
