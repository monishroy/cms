<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Semister;
use App\Models\Department;
use App\Models\Session;

class AdminStudentController extends Controller
{
    public function index()
    {
        $url = url('/admin/student/add');
        $title_header = 'Add Student';
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();
        
        return view('admin.add-student',
        [
        'url' => $url,
        'title_header' => $title_header,
        'semister' => $semister,
        'department' => $department,
        'session' => $session,
        ]
        );
    }

    public function all_student()
    {
        // $students = Student::with('getDepartment')->get();
        // $session = Session::findOrFail(3);
        //dd();
        $students = Student::all();
        $data = compact('students');
        return view('admin.all-student')->with($data);
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'fname' => 'required|min:3',
                'lname' => 'required|min:3',
                'roll' => 'required|unique:students,roll',
                'registration' => 'required|unique:students,registration',
                'session' => 'required',
                'department' => 'required',
                'semister' => 'required',
                'phone' => 'required|max:12|min:11|unique:students,phone',
                'gPhone' => 'required|max:12|min:11',
                'address' => 'required',
            ]
        );


        //Insert Query
        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
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
            return back()->with('success','Student Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }

    }

    public function edit($id)
    {
        $student = Student::find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $url = url('/admin/student/update/').'/'.$id;
            $title_header = 'Update Student';
            $semister = Semister::all();
            $department = Department::all();
            $session = Session::all();

            $data = compact('student','url','title_header','semister','department','session');
            return view('admin.add-student')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
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

    public function trash_students()
    {
        $students = Student::onlyTrashed()->get();

        $data = compact('students');
        return view('admin.trash-student')->with($data);
    }

    public function trash($id)
    {
        $student = Student::find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $result = $student->delete();

            if($result){
                return back()->with('success','Student Trash Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $result = $student->restore();

            if($result){
                return back()->with('success','Student Restore Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }

    public function delete($id)
    {
        $student = Student::withTrashed()->find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $result = $student->forceDelete();

            if($result){
                return back()->with('success','Student Delete Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }
}
