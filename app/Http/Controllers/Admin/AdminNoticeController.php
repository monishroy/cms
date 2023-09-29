<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNoticeController extends Controller
{
    public function index()
    {
        $data['notice'] = Notice::all();
        
        return view('admin.notice-board', $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'notice_title' => 'required',
            'notice_file' => 'required',
        ]);

        $filename = date('dmY').time()."-notice.".$request->file('notice_file')->getClientOriginalExtension();
        $request->file('notice_file')->storeAs('public/notice',$filename);
        
        //Insert Notice
        $result = Notice::create([
            'notice_title' => $request->notice_title,
            'notice_file' => $filename,
            'user_id' => Auth::user()->id,
        ]);

        if($result){
            return back()->with('success','Notice Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }

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
