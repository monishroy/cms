<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        return view('frontend.technology');
    }

    public function details()
    {
        return view('frontend.technology-details');
    }
}
