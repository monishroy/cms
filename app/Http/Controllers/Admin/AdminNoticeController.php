<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['notice'] = Notice::where('status', '1')->get();
        $data['title'] = 'Notice';

        return view('admin.notices', $data);
    }

    public function panding()
    {
        $data['notice'] = Notice::where('status', '0')->get();
        $data['title'] = 'Panding Notice';

        return view('admin.notices', $data);
    }

    public function declined()
    {
        $data['notice'] = Notice::where('status', '2')->get();
        $data['title'] = 'Declined Notice';

        return view('admin.notices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-notice');
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
            'file' => 'required',
        ]);

        $filename = date('dmY').time()."-notice.".$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('public/notice',$filename);
        
        //Insert Notice
        $result = Notice::create([
            'name' => $request->name,
            'file' => $filename,
            'user_id' => Auth::user()->id,
        ]);

        if($result){
            return back()->with('success','Notice Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
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
        //
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

    public function download($file)
    {
        $path = public_path("storage/notice/$file");
        return response()->download($path);
    }

    public function delete($id)
    {
        $result = Notice::findOrFail($id)->delete();

        if($result){
            return back()->with('success','Notice Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }  
}
