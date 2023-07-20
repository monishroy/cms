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

class AdminDashboardController extends Controller
{
    // public function __construct()
    // {
    //     return $this->middleware(['auth']);
    // }
    public function index()
    {
        $students = Student::count();
        $users = User::count();

        return view('admin.index' , compact('students','users'));
    }
   


}
