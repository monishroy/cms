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
use App\Models\Division;
use App\Models\Session;
use App\Models\StudentAcademicInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::where('status', '1')->get();
        $data['title'] = 'Students';

        return view('admin.students', $data);
    }

    public function panding()
    {
        $data['students'] = Student::where('status', '0')->get();
        $data['title'] = 'Panding Students';


        return view('admin.students', $data);
    }

    public function declined()
    {
        $data['students'] = Student::where('status', '2')->get();
        $data['title'] = 'Declined Students';

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

            'inputs.*.exam_name' => 'required',
            'inputs.*.passing_year' => 'required',
            'inputs.*.board' => 'required',
            'inputs.*.board_roll' => 'required|numeric',
            'inputs.*.reg_no' => 'required|numeric',
            'inputs.*.gpa' => 'required',
            'inputs.*.marksheet' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'inputs.*.certificate' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
        ],
        [
            'inputs.*.exam_name.required' => 'The exam name fild is requerd',
            'inputs.*.passing_year.required' => 'The passing year fild is requerd',
            'inputs.*.board.required' => 'The board fild is requerd',
            'inputs.*.board_roll.required' => 'The roll fild is requerd',
            'inputs.*.board_roll.numeric' => 'The roll fild is must be number',
            'inputs.*.reg_no.required' => 'The reg no fild is requerd',
            'inputs.*.reg_no.numeric' => 'The reg no fild is must be number',
            'inputs.*.gpa.required' => 'The gpa fild is requerd',
            'inputs.*.marksheet.required' => 'The marksheet fild is requerd',
            'inputs.*.marksheet.image' => 'The marksheet is must be image',
            'inputs.*.marksheet.mimes' => 'The marksheet format is jpg, png, jpeg',
            'inputs.*.marksheet.max' => 'The marksheet size max 1 MB',
            'inputs.*.certificate.image' => 'The certificate is must be image',
            'inputs.*.certificate.mimes' => 'The certificate format is jpg, png, jpeg',
            'inputs.*.certificate.max' => 'The certificate size max 1 MB',

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
            'user_id' => Auth::user()->id,
        ]);

        foreach ($request->inputs as $value){
            
            $studentAcademic = new StudentAcademicInfo;
            $studentAcademic->student_id = $student->id;
            $studentAcademic->academic_exam_id = $value['exam_name'];
            $studentAcademic->passing_year = $value['passing_year'];
            $studentAcademic->board_id = $value['board'];
            $studentAcademic->board_roll = $value['board_roll'];
            $studentAcademic->reg_no = $value['reg_no'];
            $studentAcademic->gpa = $value['gpa'];
            if($value['marksheet']){
                // Store marksheet files
                $marksheet = date('dmY').time().rand(111, 999)."-marksheet.".$value['marksheet']->getClientOriginalExtension();
                $value['marksheet']->storeAs('public/document', $marksheet);

                $studentAcademic->marksheet = $marksheet;
            }
            if($value['certificate']){
                // Store certificate files
                $certificate = date('dmY').time().rand(111, 999)."-certificate.".$value['certificate']->getClientOriginalExtension();
                $value['certificate']->storeAs('public/document', $certificate);

                $studentAcademic->certificate = $certificate;
            }
            $result = $studentAcademic->save();

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
        $data['academicinfos'] = StudentAcademicInfo::where('student_id', $id)->get();

        return view('admin.edit-student', $data);
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
        ]);

        $imagename = date('dmY').time()."-student.".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/users',$imagename);

        $student = Student::findOrFail($id)->update([
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

        if($student){
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
        $result = Student::findOrFail($id)->delete();

        if($result){
            return back()->with('success','Student Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function status_accept($id)
    {
        $student = Student::findOrFail($id);
        $student->status = '1';
        $student->save();

        $result = User::create([
            'name' => $student->fname.' '.$student->lname,
            'email' => $student->email,
            'image' => $student->image,
            'phone' => $student->phone,
            'bio' => 'I am a good Student',
            'password' => Hash::make('123456'),
        ]);
        if($result){
            return back()->with('success','Student Active Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function status_decline($id)
    {
        $student = Student::findOrFail($id);
        $student->status = '2';
        $result = $student->save();
        if($result){
            return back()->with('success','Student Declined Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function status_panding($id)
    {
        $student = Student::findOrFail($id);
        $student->status = '0';
        $result = $student->save();
        if($result){
            return back()->with('success','Student Panding Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
