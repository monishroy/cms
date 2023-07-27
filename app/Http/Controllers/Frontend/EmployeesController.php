<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $departments = Department::all();
        return view('frontend.employees', compact('employees','departments'));
    }
}
