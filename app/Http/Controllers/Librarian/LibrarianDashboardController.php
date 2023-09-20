<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class LibrarianDashboardController extends Controller
{
    public function index()
    {
        $students = Student::count();
        return view('librarian.index', compact('students'));
    }
}
