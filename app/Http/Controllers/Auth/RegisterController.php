<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5',
            ]
        );

        //Insert Query
        $student = new User();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password = Hash::make($request['password']);
        $result = $student->save();

        if($result){
            return back()->with('success','Registration Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
