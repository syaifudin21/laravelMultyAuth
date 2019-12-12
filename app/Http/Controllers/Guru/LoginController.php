<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:guru')->except(['logout']);
    }
    public function form()
    {
        return view('guru.guru-login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:4'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::guard('guru')->attempt($credential, false)){
            return redirect()->intended(route('guru.home'));
        }
        return back()->with(['alert'=> "'title':'Gagal Login','text':'Kombinasi Username dan Password tidak sesuai', 'icon':'error'"])->withInput($request->only('username', 'remember'));
        
    }

    public function logout(Request $request)
    {
        Auth::guard('guru')->logout();
        return redirect('/');
    }
}
