<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminDashboardController extends Controller
{
    public function index()
    {
        $data['students'] = Student::count();
        $data['users'] = User::count();
        $data['total_employees'] = Employee::count();
        $data['total_books'] = Book::count();

        return view('super-admin.index' , $data);
    }
}
