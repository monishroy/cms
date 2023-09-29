<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherProfileController extends Controller
{
    public function index()
    {
        $employee = Employee::where('phone', Auth::user()->phone)->first();
        $students_count = Student::count();
        
        return view('teacher.profile', compact('students_count','employee'));
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|min:11',
                'bio' => 'required',
                'emloyee_id' => 'required',
            ]
        );

        User::findOrFail(Auth::user()->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        $result = Employee::findOrFail($request->emloyee_id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        if($result){
            return back()->with('success','Profile Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
