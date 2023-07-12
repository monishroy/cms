<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index($lang = null)
    {
        App::setLocale($lang);
        if(Auth::user()){
        $students = Student::count();
        $teachers = User::count();

        return view('admin.index' , compact('students','teachers'));
        }else{
            return view('frontend.index');
        }

    }
}
