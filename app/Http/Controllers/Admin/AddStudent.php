<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class AddStudent extends Controller
{
    public function addStudent(Request $request)
    {
        $request->validate(
            [
                'fname' => 'required|min:3',
                'lname' => 'required|min:3',
                'roll' => 'required|unique:students,roll',
                'registration' => 'required|unique:students,registration',
                'session' => 'required',
                'gender' => 'required',
                'semister' => 'required',
                'phone' => 'required|max:12|min:11||unique:students,phone',
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
        $student->gender = $request['gender'];
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
}
