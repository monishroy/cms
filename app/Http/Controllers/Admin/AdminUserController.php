<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        return view('admin.users', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('admin.edit-user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if(Auth::user()->role == 'super-admin'){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email:filter',
                'image' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
                'phone' => 'required',
                'role' => 'required',
                'password' => 'nullable|min:6',
            ]);

            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->hasFile('image')){
                $imageName = date('dmY').time()."-user.".$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/users',$imageName);

                $user->image = $imageName;
            }
            $user->phone = $request->phone;
            $user->role = $request->role;
            if(!is_null($request->password)){
                $user->password = Hash::make($request->password);
            }
            $result = $user->save();
            
        }else{
            $request->validate([
                'name' => 'required',
                'email' => 'required|email:filter',
                'image' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
                'phone' => 'required',
            ]);


            if($request->image){
                $imageName = date('dmY').time()."-user.".$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/users',$imageName);

                $result = User::findOrFail($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $imageName,
                    'phone' => $request->phone,
                ]);
            }else{
                $result = User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
            }
        }
        

        if($result){
            return back()->with('success','User Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Auth::user()->role == 'super-admin'){
            $result = $user->delete();

            if($result){
                return back()->with('success','User Delete Successfully.');
            }else{
                return back()->with('Something is Worng!');
            }
        }else{
            return back()->with('Something is Worng!');
        }
        
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
                return back()->with('success','User Active Successfully.');
            }else{
                return back()->with('Something is Worng!');
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
                return back()->with('success','User Deactive Successfully.');
            }else{
                return back()->with('Something is Worng!');
            }
        }
    }
}
