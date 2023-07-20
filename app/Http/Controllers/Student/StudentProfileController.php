<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function index()
    {
        $user = User::count();
        $students = Student::count();
        $contact = Contact::all();
        $data = compact('user','students','contact');
        return view('student.profile')->with($data);
    }
}
