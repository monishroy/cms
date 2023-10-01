<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\AcademicExam;
use App\Models\BloodGroup;
use App\Models\Board;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semister;
use App\Models\Department;
use App\Models\District;
use App\Models\Division;
use App\Models\Session;
use App\Models\StudentAcademicInfo;
use App\Models\Upazila;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SuperAdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::all();
        
        return view('admin.students', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['departments'] = Department::all();
        $data['sessions'] = Session::all();
        $data['semisters'] = Semister::all();
        $data['blood_groups'] = BloodGroup::all();
        $data['divisions'] = Division::all();
        $data['boards'] = Board::all();
        $data['academic_exams'] = AcademicExam::all();

        return view('admin.add-student', $data);
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
            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'email' => 'required|email:filter',
            'roll' => 'required|numeric',
            'registration' => 'required|numeric',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required|max:12|min:11',
            'guardian_phone' => 'required|max:12|min:11',
            'department' => 'required',
            'semister' => 'required',
            'session' => 'required',
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
            'board_roll' => 'required|numeric',
            'reg_no' => 'required|numeric',
            'gpa' => 'required',
            'marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'certificate' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
        ]);

        $imagename = date('dmY').time()."-student.".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/users',$imagename);

        //Insert Student
        $student = Student::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'image' => $imagename,
            'email' => $request->email,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'guardian_phone' => $request->guardian_phone,
            'department_id' => $request->department,
            'semister_id' => $request->semister,
            'session_id' => $request->session,
            'blood_group_id' => $request->blood_group,
            'nationality' => $request->nationality,
            'division_id' => $request->division,
            'district_id' => $request->district,
            'upazila_id' => $request->upazila,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
        ]);

        if(is_file($request->marksheet)){

            $marksheet = date('dmY').time()."-marksheet.".$request->file('marksheet')->getClientOriginalExtension();
            $request->file('marksheet')->storeAs('public/document',$marksheet);

            $result = StudentAcademicInfo::create([
                'student_id' => $student->id,
                'academic_exam_id' => $request->exam_name,
                'passing_year' => $request->passing_year,
                'board_id' => $request->board,
                'board_roll' => $request->board_roll,
                'reg_no' => $request->reg_no,
                'gpa' => $request->gpa,
                'marksheet' => $marksheet,
            ]);

        }elseif(is_file($request->certificate)){

            $certificate = date('dmY').time()."-certificate.".$request->file('certificate')->getClientOriginalExtension();
            $request->file('certificate')->storeAs('public/document',$certificate);

            $result = StudentAcademicInfo::create([
                'student_id' => $student->id,
                'academic_exam_id' => $request->exam_name,
                'passing_year' => $request->passing_year,
                'board_id' => $request->board,
                'board_roll' => $request->board_roll,
                'reg_no' => $request->reg_no,
                'gpa' => $request->gpa,
                'certificate' => $certificate,
            ]);

        }else{
            $result = StudentAcademicInfo::create([
                'student_id' => $student->id,
                'academic_exam_id' => $request->exam_name,
                'passing_year' => $request->passing_year,
                'board_id' => $request->board,
                'board_roll' => $request->board_roll,
                'reg_no' => $request->reg_no,
                'gpa' => $request->gpa,
            ]);
        }

        if($result){
            return back()->with('success','Student Add Successfully');
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
        $data['student'] = Student::findOrFail($id);
        $data['departments'] = Department::all();
        $data['sessions'] = Session::all();
        $data['semisters'] = Semister::all();
        $data['blood_groups'] = BloodGroup::all();
        $data['divisions'] = Division::all();
        $data['boards'] = Board::all();
        $data['academic_exams'] = AcademicExam::all();

        return view('admin.add-student', $data);
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
            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'email' => 'required|email:filter',
            'roll' => 'required|numeric',
            'registration' => 'required|numeric',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required|max:12|min:11',
            'guardian_phone' => 'required|max:12|min:11',
            'department' => 'required',
            'semister' => 'required',
            'session' => 'required',
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
            'board_roll' => 'required|numeric',
            'reg_no' => 'required|numeric',
            'gpa' => 'required',
            'marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'certificate' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
        ]);

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Student::findOrFail($id)->delete();

        if($result){
            return back()->with('success','Student Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
