<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5'
        ]);

        if (Auth::attempt($user)) {
            return redirect('/admin/dashboard');
        } else {
            return back()->with('error','Please enter valid details!');
        }
    }

}
