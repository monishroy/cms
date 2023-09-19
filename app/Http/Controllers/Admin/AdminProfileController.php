<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = User::count();
        $students = Student::count();
        $contact = Contact::all();
        $data = compact('user','students','contact');
        return view('admin.profile')->with($data);
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:11',
                'bio' => 'required',
            ]
        );

        //Insert Query
        $user = User::find(Auth::user()->id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->bio = $request['bio'];
        $result = $user->save();

        if($result){
            return back()->with('success','User Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
    
}
