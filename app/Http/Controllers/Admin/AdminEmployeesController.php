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
use Illuminate\Support\Facades\Auth;
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
        $data['employees'] = Employee::where('status', '1')->get();
        $data['title'] = 'Employees';

        return view('admin.employees', $data);
    }
        
    public function panding()
    {
        $data['employees'] = Employee::where('status', '0')->get();
        $data['title'] = 'Panding Employees';


        return view('admin.employees', $data);
    }

    public function declined()
    {
        $data['employees'] = Employee::where('status', '2')->get();
        $data['title'] = 'Declined Employees';

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

            'inputs.*.exam_name' => 'required',
            'inputs.*.passing_year' => 'required',
            'inputs.*.board' => 'required',
            'inputs.*.roll' => 'required|numeric',
            'inputs.*.reg_no' => 'required|numeric',
            'inputs.*.gpa' => 'required',
            'inputs.*.marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'inputs.*.certificate' => 'required|image|mimes:png,jpg,jpeg|max:1024',
        ],
        [
            'inputs.*.exam_name.required' => 'The exam name fild is requerd',
            'inputs.*.passing_year.required' => 'The passing year fild is requerd',
            'inputs.*.board.required' => 'The board fild is requerd',
            'inputs.*.roll.required' => 'The roll fild is requerd',
            'inputs.*.roll.numeric' => 'The roll fild is must be number',
            'inputs.*.reg_no.required' => 'The reg no fild is requerd',
            'inputs.*.reg_no.numeric' => 'The reg no fild is must be number',
            'inputs.*.gpa.required' => 'The gpa fild is requerd',
            'inputs.*.marksheet.required' => 'The marksheet fild is requerd',
            'inputs.*.marksheet.image' => 'The marksheet is must be image',
            'inputs.*.marksheet.mimes' => 'The marksheet format is jpg, png, jpeg',
            'inputs.*.marksheet.max' => 'The marksheet size max 1 MB',
            'inputs.*.certificate.required' => 'The certificate fild is requerd',
            'inputs.*.certificate.image' => 'The certificate is must be image',
            'inputs.*.certificate.mimes' => 'The certificate format is jpg, png, jpeg',
            'inputs.*.certificate.max' => 'The certificate size max 1 MB',

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
            'user_id' => Auth::user()->id,
        ]);

        foreach ($request->inputs as $value) {

            $result = EmployeeAcademicInfo::create([
                'employee_id' => $employee->id,
                'academic_exam_id' => $value['exam_name'],
                'passing_year' => $value['passing_year'],
                'board_id' => $value['board'],
                'roll' => $value['roll'],
                'reg_no' => $value['reg_no'],
                'gpa' => $value['gpa'],
            ]);

        }

        foreach ($request->file('inputs') as $value) {

            $marksheet = date('dmY').time()."-marksheet.".$request->file($value['marksheet'])->getClientOriginalExtension();
            $certificate = date('dmY').time()."-certificate.".$request->file($value['certificate'])->getClientOriginalExtension();

            $request->file($value['marksheet'])->storeAs('public/document',$marksheet);
            $request->file($value['certificate'])->storeAs('public/document',$certificate);

            $result = EmployeeAcademicInfo::create([
                'marksheet' => $marksheet,
                'certificate' => $certificate,
            ]);

        }
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

        return view('admin.edit-employee', $data);
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
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
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
        ]);

        if($request->image){

            $imagename = date('dmY').time()."-employees.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/users',$imagename);

            //Insert Employee
            $employee = Employee::findOrFail($id)->update([
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

        }else{

            $employee = Employee::findOrFail($id)->update([
                'name' => $request->name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
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
        }

        if($employee){
            return back()->with('success','Employee Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
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
        $result = $employee->delete();

        if($result){
            return back()->with('success','Employee Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
        
    }

}
