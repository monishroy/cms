<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $students = Student::count();
        $users = User::count();

        return view('student.index' , compact('students','users'));
    }
}
