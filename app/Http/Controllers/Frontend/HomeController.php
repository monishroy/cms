<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index($lang = null)
    {
        App::setLocale($lang);
        if(Auth::user()){
            return view('admin.index');
        }else{
            return view('frontend.index');
        }

    }
}
