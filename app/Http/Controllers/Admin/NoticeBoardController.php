<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function add(Request $request)
    {
        $request->validate(
            [
                'notice_title' => 'required',
                'notice_file' => 'required',
                'added_id' => 'required',
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
        $notice->added_id = $request['added_id'];
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
}
