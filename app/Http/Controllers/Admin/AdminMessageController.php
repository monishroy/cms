<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index()
    {
        $data['messages'] = Message::all();
        return view('admin.message', $data);
    }
}
