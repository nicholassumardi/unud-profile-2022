<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('frontpages.account.login.index');
        }
    }

    public function isAdmin($username, $password)
    {
        // Jika data login benar (Admin).
        if (Auth::attempt([
            'email' => $username,
            'password' => $password,
            'status' => 1,
            'tipe_user_id' => 1
        ])) {
            return true;
        }

        return false;
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = $request->password;


        if ($this->isAdmin($username, $password)) {
            return redirect()->route('admin.index');
        }


        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }

}
