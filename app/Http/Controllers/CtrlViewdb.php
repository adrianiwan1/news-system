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
        $baza=db::table("artykuly")->get();
        return view('main', compact('baza'));

    }
}
