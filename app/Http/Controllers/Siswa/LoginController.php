<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:siswa')->except(['logout']);
    }
    public function form()
    {
        return view('siswa.siswa-login');
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

        if (Auth::guard('siswa')->attempt($credential, false)){
            return redirect()->intended(route('siswa.home'));
        }
        return back()->with(['alert'=> "'title':'Gagal Login','text':'Kombinasi Username dan Password tidak sesuai', 'icon':'error'"])->withInput($request->only('username', 'remember'));
        
    }

    public function logout(Request $request)
    {
        Auth::guard('siswa')->logout();
        return redirect('/');
    }
}
