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
        $data['departments'] = Department::take(6)->get();
        return view('frontend.employees', $data);
    }

    public function department($id)
    {
        $employees = Employee::where('department_id', $id)->get();
        if(is_null($employees)){
            return back()->with('error','Employees Not Found!');
        }else{
            $department = Department::findOrFail($id);
            $department_name = $department->name;

            return view('frontend.employees-details', compact('employees','department_name'));
        }
    }
}
