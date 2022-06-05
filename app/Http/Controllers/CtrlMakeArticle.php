<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            'tresc' => $request -> text,
            'obrazek' => $image,
            'zbanowany' => '0'
        ]);
        return redirect()->to('/');
    }
}
