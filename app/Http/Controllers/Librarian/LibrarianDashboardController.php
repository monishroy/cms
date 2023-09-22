<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class LibrarianDashboardController extends Controller
{
    public function index()
    {
        $students_count = Student::count();
        $books_count = Book::count();
        return view('librarian.index', compact('students_count','books_count'));
    }
}
