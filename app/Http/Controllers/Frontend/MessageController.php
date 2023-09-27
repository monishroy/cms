<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email:filter',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request['fullname'];
        $message->email = $request['email'];
        $message->subject = $request['subject'];
        $message->message = $request['message'];
        $result = $message->save();

        if($result){
            return back()->with('success','Send Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
