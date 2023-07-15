<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Semister;
use App\Models\Department;
use App\Models\Session;

class StudentController extends Controller
{
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
        $student->department = $request['department'];
        $student->session = $request['session'];
        $student->phone = $request['phone'];
        $student->gPhone = $request['gPhone'];
        $student->semister = $request['semister'];
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
        $student->department = $request['department'];
        $student->session = $request['session'];
        $student->phone = $request['phone'];
        $student->gPhone = $request['gPhone'];
        $student->semister = $request['semister'];
        $student->address = $request['address'];
        $result = $student->save();

        if($result){
            return back()->with('success','Student Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
