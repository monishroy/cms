<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class AdminTechnologyController extends Controller
{
    public function add(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'image1' => 'required',
                'image2' => 'required',
                'text1' => 'required',
                'text2' => 'required',
            ]
        );

        // echo "<pre>";
        // print_r($request->all());

        $imageName1 = date('dmY').time()."-1.".$request->file('image1')->getClientOriginalExtension();
        $imageName2 = date('dmY').time()."-2.".$request->file('image2')->getClientOriginalExtension();

        $request->file('image1')->storeAs('public/technology',$imageName1);
        $request->file('image2')->storeAs('public/technology',$imageName2);
        
        //Insert Notice
        $technology = new Technology();
        $technology->name = $request['name'];
        $technology->image1 = $imageName1;
        $technology->image2 = $imageName2;
        $technology->text1 = $request['text1'];
        $technology->text2 = $request['text2'];
        $result = $technology->save();

        if($result){
            return back()->with('success','Technology Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
