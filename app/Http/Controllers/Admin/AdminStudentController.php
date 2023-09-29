<?php

namespace App\Http\Controllers\Admin;

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

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
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

        //Insert Employee
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
        $student = Student::find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $url = route('students.update', $id);
            $title_header = 'Update Student';
            $semister = Semister::all();
            $department = Department::all();
            $session = Session::all();

            $data = compact('student','url','title_header','semister','department','session');
            return view('admin.add-student')->with($data);
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
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'email' => 'required|email:filter',
            'roll' => 'required',
            'registration' => 'required',
            'session' => 'required',
            'department' => 'required',
            'semister' => 'required',
            'phone' => 'required|max:12|min:11',
            'gPhone' => 'required|max:12|min:11',
            'address' => 'required',
        ]);

        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        if(is_file($request->image)){
            $imageName = date('dmY').time()."si-$student->id.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/users',$imageName);
            
            // if($student->image != '1.png' && $student->image != '2.png' && $student->image != '3.png' && $student->image != '4.png' && $student->image != '5.png'){
            //     $imagePath = public_path('storage/users/'. $student->image);
            //     unlink($imagePath);
            // }
            $student->image = $imageName;
        }
        $student->roll = $request['roll'];
        $student->registration = $request['registration'];
        $student->department_id = $request['department'];
        $student->session_id = $request['session'];
        $student->phone = $request['phone'];
        $student->gPhone = $request['gPhone'];
        $student->semister_id = $request['semister'];
        $student->address = $request['address'];
        $result = $student->save();

        if($result){
            return back()->with('success','Student Update Successfully');
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
    public function destroy($id)
    {
        $$result = Student::find($id)->delete();

        if($result){
            return back()->with('success','Technology Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
