<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CtrlAdmin extends Controller
{
    public function all_users(Request $request)
    {
        $data=db::table('uzytkownicy')
        ->select('id','login', 'dataUrodzenia','plec','wojewodzstwo','powiat','miejscowosc','role.nazwa','zbanowany')
        ->join('role','uzytkownicy.rola','=','role.roleID')
        ->get();
        //dd($data);
        return view('allusers',compact('data'));
    }
}
