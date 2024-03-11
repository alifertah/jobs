<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * try to authenticate, in fail it stays in the same page
     */
    public function login(Request $r){
        $credentials = $r->only('email', 'password');
        $remember = $r->filled("remember");

        if(Auth::attempt($credentials, $remember)){
            return redirect("/manageEvents");
        }
        return redirect()->back()->withErrors([
            'login' => 'These credentials do not match our records.',
        ]);
    }
}
