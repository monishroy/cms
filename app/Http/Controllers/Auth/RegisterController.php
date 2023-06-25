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
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->image = $request['image'];
        $user->password = Hash::make($request['password']);
        $result = $user->save();

        if($result){
            return back()->with('success','Registration Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
