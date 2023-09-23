<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class LibrarianProfileController extends Controller
{
    public function index()
    {
        $students_count = Student::count();
        $books_count = Book::count();

        return view('librarian.profile', compact('students_count', 'books_count'));
    }
}
