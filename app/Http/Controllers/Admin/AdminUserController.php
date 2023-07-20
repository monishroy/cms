<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $data = compact('users');
        return view('admin.users')->with($data);
    }

    public function status_active($id)
    {
        $users = User::find($id);
        if(is_null($users)){
            return back()->with('error','User Not Found!');
        }else{
            $users = User::find($id);
            $users->status = '1';
            $result = $users->save();

            if($result){
                return back()->with('success','User Active Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }
    
    public function status_deactive($id)
    {
        $users = User::find($id);
        if(is_null($users)){
            return back()->with('error','User Not Found!');
        }else{
            $users = User::find($id);
            $users->status = '0';
            $result = $users->save();

            if($result){
                return back()->with('success','User Deactive Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }
}
