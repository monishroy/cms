<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Notice;
use App\Models\Semister;
use App\Models\Session;
use App\Models\Student;
use App\Models\TeacherPossion;
use App\Models\Technology;
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
        $users = User::count();

        return view('admin.index' , compact('students','users'));
    }

    public function profile()
    {
        $user = User::count();
        $students = Student::count();
        $contact = Contact::all();
        $data = compact('user','students','contact');
        return view('admin.profile')->with($data);
    }

    public function notice()
    {
        $notice = Notice::all();

        $data = compact('notice');
        
        return view('admin.notice-board')->with($data);
    }

    public function technology()
    {
        $technology = Technology::all();

        $data = compact('technology');
        
        return view('admin.technology')->with($data);
    }

    public function add_student()
    {
        $url = url('/admin/student/add');
        $title_header = 'Add Student';
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();

        $data = compact('url','title_header','semister','department','session');

        return view('admin.add-student')->with($data);
    }

    public function all_student()
    {
        // $students = Student::with('getDepartment')->get();
        //dd();
        $students = Student::all();
        // $session = Session::findOrFail(3);
        // return $students->session;
        // die();
        // $semister = Semister::all();
        // $session = Session::all();
        $data = compact('students');
        return view('admin.all-student')->with($data);
    }

    public function users()
    {
        $users = User::all();

        $data = compact('users');
        return view('admin.users')->with($data);
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

    
    public function trash_students()
    {
        $students = Student::onlyTrashed()->get();
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();

        $data = compact('students','semister','department','session');
        return view('admin.trash-student')->with($data);
    }
    
    public function trash_notice()
    {
        $notice = Notice::onlyTrashed()->get();

        $data = compact('notice');
        return view('admin.trash-notice')->with($data);
    }
    
    public function trash_technology()
    {
        $technology = Technology::onlyTrashed()->get();

        $data = compact('technology');
        return view('admin.trash-technology')->with($data);
    }
}
