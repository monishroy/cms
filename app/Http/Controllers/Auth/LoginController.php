<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email:filter',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt($user)){
            if(auth()->user()->status == 1){
                if(auth()->user()->role === 'super-admin'){
                    return redirect()->route('admin.dashboard');
                }elseif(auth()->user()->role === 'admin'){
                    return redirect()->route('admin.dashboard');
                }elseif(auth()->user()->role === 'student'){
                    return redirect()->route('student.profile');
                }elseif(auth()->user()->role === 'teacher'){
                    return redirect()->route('teacher.profile');
                }elseif(auth()->user()->role === 'librarian'){
                    return redirect()->route('librarian.profile');
                }else{
                    return redirect('/login');
                }
            }else{
                Auth::logout();
                return back()->with('error','Your Account is Deactive!');
            }
        }else{
            return back()->with('error','Please enter valid details!');
        }
    }
    

}
