<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $data['user'] = User::count();
        $data['students'] = Student::count();

        return view('admin.profile', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:filter',
            'phone' => 'required|min:11',
            'bio' => 'required',
        ]);


        //Update  Query
        $result = User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        if($result){
            return back()->with('success','Profile Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
    
}
