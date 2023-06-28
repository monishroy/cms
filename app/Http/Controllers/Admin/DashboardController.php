<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    public function index()
    {
        return view('admin.index');
    }

    public function add_student()
    {
        return view('admin.add_student');
    }

    public function all_user()
    {
        return view('admin.all_user');
    }
}
