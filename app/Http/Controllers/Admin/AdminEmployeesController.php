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
        $url = route('employees.store');
        $title = 'Add Employee';
        $department = Department::all();
        $position = Position::all();

        return view('admin.add-employee', compact('url','title','department','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'email' => 'required',
            'phone' => 'required|max:12|min:11',
            'department' => 'required',
            'position' => 'required',
            'role' => 'required',
            'bio' => 'required',
        ]);

        $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/employees',$imagename);
        $request->file('image')->storeAs('public/users',$imagename);

        //Insert Employee
        $employees = new Employee();
        $employees->name = $request->name;
        $employees->image = $imagename;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        $employees->department_id = $request->department;
        $employees->position_id = $request->position;
        $result = $employees->save();

        //Insert User
        $user = new User();
        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->image = $imagename;
        $user->password = Hash::make('123456');
        $user->role = $request->role;
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
        $employee = Employee::find($id);
        if(is_null($employee)){
            return back()->with('error','Student Not Found!');
        }else{
            $url = route('employees.update', $id);
            $title = 'Update Employee';
            $user = User::where('phone', $employee->phone)->first();
            $department = Department::all();
            $position = Position::all();
            return view('admin.add-employee', compact('employee','url','title','department','position','user'));
        }
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
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'email' => 'required',
            'phone' => 'required|max:12|min:11',
            'department' => 'required',
            'position' => 'required',
            'role' => 'required',
            'bio' => 'required',
            'user_id' => 'required',
        ]);

        if($request->image){

            $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();    
            $request->file('image')->storeAs('public/employees',$imagename);
            $request->file('image')->storeAs('public/users',$imagename);

            Employee::findOrFail($id)->update([
                'name' => $request->name,
                'image' => $imagename,
                'email' => $request->email,
                'phone' => $request->phone,
                'department_id' => $request->department,
                'position_id' => $request->position,
            ]);

            $result = User::findOrFail($request->user_id)->update([
                'name' => $request->name,
                'bio' => $request->bio,
                'image' => $imagename,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
            ]);

            if($result){
                return back()->with('success','Employees Add Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }else{
            
            Employee::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'department_id' => $request->department,
                'position_id' => $request->position,
            ]);

            $result = User::findOrFail($request->user_id)->update([
                'name' => $request->name,
                'bio' => $request->bio,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
            ]);

            if($result){
                return back()->with('success','Employees Add Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('success','Employee Delete Successfully');
    }
}
