<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('frontend.notice');
    }
    public function details()
    {
        return view('frontend.notice-details');
    }
}
