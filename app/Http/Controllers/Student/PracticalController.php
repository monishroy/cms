<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Practical;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PracticalController extends Controller
{
    public function index()
    {
        $student = Student::where('email', Auth::user()->email)->first();

        $department_id = $student->department_id;
        $semister_id = $student->semister_id;
        $session_id = $student->session_id;

        $data['practicals'] = Practical::where('department_id', $department_id)->where('semister_id', $semister_id)->where('session_id', $session_id)->get();
        $data['notices'] = Notice::all();
        
        return view('student.practicals', $data);
    }
}
