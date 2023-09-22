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
        if (Auth::user()) {
            if(auth()->user()->role === 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif(auth()->user()->role === 'user'){
                return redirect()->route('student.profile');
            }elseif(auth()->user()->role === 'teacher'){
                return redirect()->route('teacher.dashboard');
            }elseif(auth()->user()->role === 'librarian'){
                return redirect()->route('librarian.dashboard');
            }else{
                return redirect()->route('notice');
            }
        } else {
            return redirect()->route('notice');
        } 
    }

}

