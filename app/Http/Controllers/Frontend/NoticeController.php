<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notice = Notice::all();

        $data = compact('notice');
        return view('frontend.notice')->with($data);
    }

    public function download($file)
    {
        $find = Notice::where('notice_file', $file)->first();
        if(is_null($find)){
            return back()->with('error','File is not found!');
        }else{

            $id = $find->id;
            $download = $find->download+1;

            $notice = Notice::find($id);
            $notice->download = $download;
            $result = $notice->save();

            if($result){
                $path = public_path("storage/notice/$file");
                return response()->download($path);
            }else{
                return back()->with('error','Something is Worng!');
            }
            
        }
        
    }
}
