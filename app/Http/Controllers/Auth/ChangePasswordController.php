<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    public function index($id,$token)
    {
        $user = User::find($id);
        
        if(is_null($user)){
            return back()->with('error','Something is Worng!');
        }else{
            $email = $user->email;
            $old_token = $user->token;

            if($old_token == $token){
                return view('auth.change-password', compact('id','token'));
            }else{
                return back()->with('error','Token Invalid!');
            }
        }
    }

    public function change_password(Request $request)
    {
        $request->validate(
            [
                'id' => 'required|exists:users,id',
                'varify-token' => 'required',
                'new_password' => 'required|same:re_new_password',
                're_new_password' => 'required',
            ]
        );

        $new_password = $request['new_password'];

        $id = $request['id'] ;
        $user = User::where('id', $id)->first();

        $old_token = $user->token;

        $token = $request['varify-token'];

        if($old_token == $token){
            $user = User::find($id);
            $user->password = Hash::make($new_password);
            $user->token = Str::random(40);
            $result = $user->save();
            if($result){
                return redirect()->route('login')->with('success','Password Change successfully.');
            }else{
                return back()->with('error','Server Down!');
            }
        }else{
            return back()->with('error','Token Invalid!');
        }
       
        
    }
}
