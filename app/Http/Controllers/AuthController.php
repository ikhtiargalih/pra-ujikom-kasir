<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.user.auth.login');
    }
    
    public function auth(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $kasir = User::where('email', $request->email)->first();

        if ($kasir && Hash::check($request->password, $kasir->password)) {
            $kasir->last_login = now()->format("Y-m-d H:i:s");
            $kasir->save();

            Auth::login($kasir);
            return redirect('dashboard/user');
        }
        return back()->with('fail', 'Email or Password Invalid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
