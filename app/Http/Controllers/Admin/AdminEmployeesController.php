<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicExam;
use App\Models\BloodGroup;
use App\Models\Board;
use App\Models\Department;
use App\Models\District;
use App\Models\Division;
use App\Models\Employee;
use App\Models\EmployeeAcademicInfo;
use App\Models\Position;
use App\Models\Upazila;
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
        $blood_group = BloodGroup::all();
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
        $boards = Board::all();
        $academic_exams = AcademicExam::all();

        return view('admin.add-employee', compact('department','position','blood_group','divisions','districts','upazilas','boards','academic_exams'));
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
            'father_name' => 'required',
            'mother_name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'merital_status' => 'required',
            'phone' => 'required|max:12|min:11',
            'department' => 'required',
            'position' => 'required',
            'blood_group' => 'required',
            'nationality' => 'required',
            'division' => 'required',
            'district' => 'required',
            'upazila' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'exam_name' => 'required',
            'passing_year' => 'required',
            'board' => 'required',
            'roll' => 'required',
            'reg_no' => 'required',
            'gpa' => 'required',
            'marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'certificate' => 'required|image|mimes:png,jpg,jpeg|max:1024',
        ]);

        $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/users',$imagename);

        //Insert Employee
        $employee = Employee::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'image' => $imagename,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'merital_status' => $request->merital_status,
            'phone' => $request->phone,
            'department_id' => $request->department,
            'position_id' => $request->position,
            'blood_group_id' => $request->blood_group,
            'nationality' => $request->nationality,
            'division_id' => $request->division,
            'district_id' => $request->district,
            'upazila_id' => $request->upazila,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
        ]);

        $marksheet = date('dmY').time()."-marksheet.".$request->file('marksheet')->getClientOriginalExtension();
        $certificate = date('dmY').time()."-certificate.".$request->file('certificate')->getClientOriginalExtension();

        $request->file('marksheet')->storeAs('public/document',$marksheet);
        $request->file('certificate')->storeAs('public/document',$certificate);

        $result = EmployeeAcademicInfo::create([
            'employee_id' => $employee->id,
            'academic_exam_id' => $request->exam_name,
            'passing_year' => $request->passing_year,
            'board_id' => $request->board,
            'roll' => $request->roll,
            'reg_no' => $request->reg_no,
            'gpa' => $request->gpa,
            'marksheet' => $marksheet,
            'certificate' => $certificate,
        ]);

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
            
            $user = User::where('phone', $employee->phone)->first();
            $department = Department::all();
            $position = Position::all();
            return view('admin.add-employee', compact('employee','department','position','user'));
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
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
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
                return back()->with('success','Employee Update Successfully');
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
                return back()->with('success','Employee Update Successfully');
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
