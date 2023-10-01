<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\AcademicExam;
use App\Models\BloodGroup;
use App\Models\Board;
use App\Models\Department;
use App\Models\Division;
use App\Models\Employee;
use App\Models\EmployeeAcademicInfo;
use App\Models\Position;
use Illuminate\Http\Request;

class SuperAdminEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employees'] = Employee::all();

        return view('admin.employees', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();
        $data['blood_groups'] = BloodGroup::all();
        $data['divisions'] = Division::all();
        $data['boards'] = Board::all();
        $data['academic_exams'] = AcademicExam::all();

        return view('admin.add-employee', $data);
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
            'email' => 'required|email:filter',
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
            'roll' => 'required|numeric',
            'reg_no' => 'required|numeric',
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
        $data['employee'] = Employee::findOrFail($id);
        $data['departments'] = Department::all();
        $data['positions'] = Position::all();
        $data['blood_groups'] = BloodGroup::all();
        $data['divisions'] = Division::all();
        $data['boards'] = Board::all();
        $data['academic_exams'] = AcademicExam::all();

        return view('admin.add-employee', $data);
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
            'father_name' => 'required',
            'mother_name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'email' => 'required|email:filter',
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
            'roll' => 'required|numeric',
            'reg_no' => 'required|numeric',
            'gpa' => 'required',
            'marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'certificate' => 'required|image|mimes:png,jpg,jpeg|max:1024',
        ]);

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $result = $employee->delete();

        if($result){
            return back()->with('success','Employee Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
        
    }


}
