<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class AdminEmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $department = Department::all();
        $position = Position::all();

        return view('admin.employees', compact('employees','department','position'));
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required',
                'email' => 'required',
                'phone' => 'required|max:12|min:11',
                'department' => 'required',
                'position' => 'required',
                'about' => 'required|max:100',
            ]
        );


        $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/employees',$imagename);

        //Insert Query
        $employees = new Employee();
        $employees->name = $request['name'];
        $employees->image = $imagename;
        $employees->email = $request['email'];
        $employees->phone = $request['phone'];
        $employees->department_id = $request['department'];
        $employees->position_id = $request['position'];
        $employees->about = $request['about'];
        $result = $employees->save();

        if($result){
            return back()->with('success','Employees Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }


}
