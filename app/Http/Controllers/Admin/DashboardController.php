<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Semister;
use App\Models\Session;
use App\Models\Student;
use App\Models\TeacherPossion;
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

    public function profile()
    {
        $user = User::count();
        $students = Student::count();
        $data = compact('user','students');
        return view('admin.profile')->with($data);
    }

    public function add_student()
    {
        $url = url('/admin/student/add');
        $title_header = 'Add Student';
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();

        $data = compact('url','title_header','semister','department','session');

        return view('admin.add_student')->with($data);
    }

    public function all_student()
    {
        $students = Student::all();
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();

        $data = compact('students','semister','department','session');
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
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();
        $possion = TeacherPossion::all();

        $data = compact('semister','department','session','possion');
        return view('admin.categories')->with($data);
    }
}
