<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $data['notice'] = Notice::where('status', '1')->get();

        return view('frontend.notice', $data);
    }

    public function download($file)
    {
        $find = Notice::where('file', $file)->first();

        if(!is_null($find)){
            $id = $find->id;
            $download = $find->download;

            $notice = Notice::find($id);
            $notice->download = $download+1;
            $result = $notice->save();

            if($result){
                $path = public_path("storage/notice/$file");
                return response()->download($path);
            }else{
                return back()->with('error','Something is Worng!');
            }
        }else{
            return back()->with('error','File is not found!');
        }
        
    }
}
