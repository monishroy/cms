<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\IssueBook;
use App\Models\Notice;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    public function index()
    {
        $student = Student::where('phone', Auth::user()->phone)->first();
        $notices = Notice::all();
        return view('student.profile', compact('student','notices'));
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|min:11',
                'bio' => 'required',
                'student_id' => 'required',
            ]
        );

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->bio = $request->bio;
        $user->save();

        $student = Student::find($request['student_id']);
        $student->phone = $request->phone;
        $result = $student->save();

        if($result){
            return back()->with('success','User Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function books()
    {
        $student = Student::where('phone', Auth::user()->phone)->first();
        $notices = Notice::all();
        $issue_books = IssueBook::where('student_id', $student->id)->where('return_date', null)->get();
        return view('student.books', compact('issue_books','notices'));
    }
}
