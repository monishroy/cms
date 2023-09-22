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
        $notice = Notice::all();

        $data = compact('notice');
        
        return view('admin.notice-board')->with($data);
    }
    
    public function add(Request $request)
    {
        $request->validate(
            [
                'notice_title' => 'required',
                'notice_file' => 'required',
            ]
        );

        // echo "<pre>";
        // print_r($request->all());

        $filename = date('dmY').time()."-notice.".$request->file('notice_file')->getClientOriginalExtension();

        $request->file('notice_file')->storeAs('public/notice',$filename);
        
        //Insert Notice
        $notice = new Notice();
        $notice->notice_title = $request['notice_title'];
        $notice->notice_file = $filename;
        $notice->user_id = Auth::user()->id;
        $result = $notice->save();

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
        $notice = Notice::withTrashed()->find($id);
        if(is_null($notice)){
            return back()->with('error','Notice Not Found!');
        }else{
            $result = $notice->delete();

            if($result){
                return back()->with('success','Notice Delete Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }  
}
