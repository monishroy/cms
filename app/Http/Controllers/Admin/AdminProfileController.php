<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = User::count();
        $students = Student::count();
        $contact = Contact::all();
        $data = compact('user','students','contact');
        return view('admin.profile')->with($data);
    }
    
}
