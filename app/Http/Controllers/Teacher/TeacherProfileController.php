<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherProfileController extends Controller
{
    public function index()
    {
        $user = User::count();
        $students = Student::count();
        $contact = Contact::all();
        $data = compact('user','students','contact');
        return view('teacher.profile')->with($data);
    }
}
