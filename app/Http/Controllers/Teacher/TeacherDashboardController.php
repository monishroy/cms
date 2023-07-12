<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        $students = Student::count();
        $teachers = User::count();

        return view('teacher.index' , compact('students','teachers'));
    }
}
