<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]
        );

        // echo "<pre>";
        // print_r($request->all());
        //Insert Notice
        $contact = new Contact();
        $contact->name = $request['fullname'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $result = $contact->save();

        if($result){
            return back()->with('success','Send Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
