<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    public function index()
    {
        $students = Student::count();
        $teachers = User::count();

        return view('admin.index' , compact('students','teachers'));
    }

    public function add_student()
    {
        return view('admin.add_student');
    }

    public function all_student()
    {
        $students = Student::all();

        $data = compact('students');
        return view('admin.all_student')->with($data);
    }

    public function all_teacher()
    {
        $teachers = User::all();

        $data = compact('teachers');
        return view('admin.all_teacher')->with($data);
    }

    public function categories()
    {
        return view('admin.categories');
    }
}
