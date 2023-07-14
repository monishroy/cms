<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('frontend.department');
    }

    public function details()
    {
        return view('frontend.department-details');
    }
}
