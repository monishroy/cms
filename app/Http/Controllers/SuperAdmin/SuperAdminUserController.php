<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminUserController extends Controller
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
        //
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:filter',
            'phone' => 'required|numeric',
            'role' => 'required',
        ]);

        $result = User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

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
    public function destroy($id)
    {
        //
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
