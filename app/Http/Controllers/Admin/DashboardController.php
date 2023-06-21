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

    public function analytics()
    {
        return view('admin.analytics');
    }

    public function crm()
    {
        return view('admin.crm');
    }

    public function projects()
    {
        return view('admin.projects');
    }


}
