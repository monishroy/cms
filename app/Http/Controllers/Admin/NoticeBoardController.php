<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
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

  
    public function trash($id)
    {
        $notice = Notice::find($id);
        if(is_null($notice)){
            return back()->with('error','Notice Not Found!');
        }else{
            $result = $notice->delete();

            if($result){
                return back()->with('success','Notice Trash Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }

    public function restore($id)
    {
        $notice = Notice::withTrashed()->find($id);
        if(is_null($notice)){
            return back()->with('error','Notice Not Found!');
        }else{
            $result = $notice->restore();

            if($result){
                return back()->with('success','Notice Restore Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }

    public function delete($id)
    {
        $notice = Notice::withTrashed()->find($id);
        if(is_null($notice)){
            return back()->with('error','Notice Not Found!');
        }else{
            $result = $notice->forceDelete();

            if($result){
                return back()->with('success','Notice Delete Successfully');
            }else{
                return back()->with('error','Something is Worng!');
            }
        }
    }  
}