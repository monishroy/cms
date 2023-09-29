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
        $data['student'] = Student::where('phone', Auth::user()->phone)->first();
        $data['notices'] = Notice::all();
        return view('student.profile', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:11',
            'bio' => 'required',
            'student_id' => 'required',
        ]);

        $result = User::findOrFail(Auth::user()->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        if($result){
            return back()->with('success','Profile Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function books()
    {
        $student = Student::where('phone', Auth::user()->phone)->first();

        $data['issue_books'] = IssueBook::where('student_id', $student->id)->where('return_date', null)->get();
        $data['notices'] = Notice::all();

        return view('student.books', $data);
    }
}
