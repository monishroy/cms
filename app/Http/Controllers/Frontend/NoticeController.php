<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notice = Notice::all();

        $data = compact('notice');
        return view('frontend.notice')->with($data);
    }

    public function download($file)
    {
        $path = public_path("storage/notice/$file");

        return response()->download($path);
    }
}
