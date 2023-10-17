<?php

namespace App\Http\Controllers;

use App\Models\Practical;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function practical($file)
    {
        $find = Practical::where('file', $file)->first();

        if(!is_null($find)){
            $id = $find->id;
            $download = $find->download;

            $notice = Practical::find($id);
            $notice->download = $download+1;
            $result = $notice->save();

            if($result){
                $path = public_path("storage/practicals/$file");
                return response()->download($path);
            }else{
                return back()->with('error','Something is Worng!');
            }
        }else{
            return back()->with('error','File is not found!');
        }
    }
}
