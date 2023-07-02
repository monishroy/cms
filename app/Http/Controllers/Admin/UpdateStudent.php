<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateStudent extends Controller
{
    public function index($id)
    {
        $student = Student::find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $url = url('/admin/student/update/').'/'.$id;
            $title_header = 'Update Student';
            $data = compact('student','url','title_header');
            return view('admin.add_student')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->roll = $request['roll'];
        $student->registration = $request['registration'];
        $student->gender = $request['gender'];
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
