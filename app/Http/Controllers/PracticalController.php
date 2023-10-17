<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Practical;
use App\Models\Semister;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PracticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['practicals'] = Practical::where('user_id', Auth::user()->id)->get();

        return view('teacher.practicals', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Practicals';
        $data['url'] = route('practicals.store');
        $data['departments'] = Department::all();
        $data['semisters'] = Semister::all();
        $data['sessions'] = Session::all();

        return view('teacher.add-practical', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|max:2048',
            'department' => 'required',
            'session' => 'required',
            'semister' => 'required',
            
        ]);

        $filename = date('dmY').time()."-practical.".$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('public/practicals',$filename);
        
        $practical = Practical::create([
            'department_id' => $request->department,
            'semister_id' => $request->semister,
            'session_id' => $request->session,
            'name' => $request->name,
            'description' => $request->description,
            'file' => $filename,
            'user_id' => Auth::user()->id,
        ]);

        if($practical){
            return back()->with('success','Notice Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function show(Practical $practical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function edit(Practical $practical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practical $practical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practical  $practical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practical $practical)
    {
        $practical->delete();
        return back()->with('success', 'Practical delete successfully');
    }

    public function active_practical($id)
    {
        $practical = Practical::find($id);
        if(is_null($practical)){
            return back()->with('error','Practical Not Found!');
        }else{
            $practical = Practical::find($id);
            $practical->status = '1';
            $result = $practical->save();

            if($result){
                return back()->with('success','Practical Active Successfully.');
            }else{
                return back()->with('Something is Worng!');
            }
        }
    }

    public function deactive_practical($id)
    {
        $practical = Practical::find($id);
        if(is_null($practical)){
            return back()->with('error','Practical Not Found!');
        }else{
            $practical = Practical::find($id);
            $practical->status = '0';
            $result = $practical->save();

            if($result){
                return back()->with('success','Practical Deactive Successfully.');
            }else{
                return back()->with('Something is Worng!');
            }
        }
    }
}
