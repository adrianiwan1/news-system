<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
use Redirect;

class CtrlUser extends Controller
{
    public function Register(Request $request)
    {
        //dd($request);
        $this->validate(request(),[
            'login' => array(
                'required',
                'regex:/^[a-z0-9_-]{3,16}$/'
            ),
            'password' => array(
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,16}$/',
            ),
            'date' => array(
                'required',
                'regex:/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/',
            ),
            'plec' => array(
                'required',
                'regex:/^([mk])$/',
            ),
            'wojewodzstwo' => array(
                'required',
                'regex:/\b([1-9]|1[0-6])\b/',
            ),
            'powiat' => 'required|max:32|not_regex:/<script>/',
            'miejscowosc' => 'required|max:32|not_regex:/<script>/',
            ]);      
            $user = User::create(request(['login','password','dataUrodzenia','plec','wojewodzstwo','powiat','miejscowosc'])+['rola'=>'2','zbanowany'=>'0','dataUrodzenia'=>request('date')]);
            return redirect()->to('/');
    }
    public function Login(Request $request)
    {
                if (auth()->attempt(request(['login', 'password'])) == false) {
                    return back()->withErrors([
                        'message' => 'Login lub hasło są nieprawidłowe.'
                    ]);
                }
                else{
                    return redirect()->to('/');
                }

    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }

}
