<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        

        if(Auth::user()){
            // App::setLocale($lang);
            if(auth()->user()->role === 'admin'){
                $students = Student::count();
                $users = User::count();
                return view('admin.index' , compact('students','users'));
            }elseif(auth()->user()->role === 'user'){
                return redirect('/user/dashboard');
            }elseif(auth()->user()->role === 'teacher'){
                return redirect()->route('teacher.dashboard');
            }else{
                return view('/');
            }
        }else{
            $notice = Notice::all();
            return view('frontend.index',compact('notice'));
        }

    }

}
