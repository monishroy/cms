<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('admin.employees', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        $position = Position::all();

        return view('admin.add-employee', compact('department','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required',
                'email' => 'required',
                'phone' => 'required|max:12|min:11',
                'department' => 'required',
                'position' => 'required',
                'about' => 'required',
            ]
        );

        $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/employees',$imagename);
        $request->file('image')->storeAs('public/users',$imagename);

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

        //Insert Query
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->image = $imagename;
        $user->password = Hash::make('123456');
        $result = $user->save();

        if($result){
            return back()->with('success','Employees Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
