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
                'roll' => 'required',
                'registration' => 'required',
                'session' => 'required',
                'phone' => 'required|max:12|min:11',
                'gPhone' => 'required|max:12|min:11',
                'address' => 'required',
            ]
        );

        //Insert Query
        $student = new Student();
        $student->name = $request['fname'];
        $student->name = $request['lname'];
        $student->name = $request['roll'];
        $student->name = $request['registration'];
        $student->name = $request['session'];
        $student->name = $request['phone'];
        $student->name = $request['gPhone'];
        $student->name = $request['address'];
        $result = $student->save();

        if($result){
            return back()->with('success','Student Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }

    }
}
