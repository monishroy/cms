<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Notice;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    public function index()
    {
        $students = Student::where('id', Auth::user()->id)->first();
        $notices = Notice::all();
        $data = compact('students','notices');
        return view('student.profile')->with($data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|min:11',
                'bio' => 'required',
                'student_id' => 'required'
            ]
        );

        //Insert Query
        $user = User::find(Auth::user()->id);
        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->bio = $request['bio'];
        $result = $user->save();

        $student = Student::find($request['student_id']);
        $student->phone = $request['phone'];
        $result = $student->save();

        if($result){
            return back()->with('success','User Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
