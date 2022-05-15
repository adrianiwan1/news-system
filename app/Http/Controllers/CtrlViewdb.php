<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CtrlViewdb extends Controller
{
    public function show_data()
    {
        $baza=db::table("artykuly")->paginate(5);
        return view('main', compact('baza'));

    }

    public function paggins()
    {

    }
    public function show_art()
    {
        $baza=db::table("artykuly")->paginate(5); //maginate method show records on one site
        return view('news', compact('baza'));

    }

}
