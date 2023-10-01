<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Employee;
use App\Models\Notice;
use App\Models\Student;
use App\Models\User;

class AdminDashboardController extends Controller
{
    // public function __construct()
    // {
    //     return $this->middleware(['auth']);
    // }
    public function index()
    {
        $data['students'] = Student::count();
        $data['users'] = User::count();
        $data['total_employees'] = Employee::count();
        $data['total_books'] = Book::count();
        $data['total_notices'] = Notice::count();

        return view('admin.index' , $data);
    }
   


}
