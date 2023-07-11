<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Semister;
use App\Models\Session;
use App\Models\TeacherPossion;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function add_semister(Request $request)
    {
        $request->validate(
            [
                'semister_name' => 'required|min:1|integer',
            ]
        );


        //Insert Query
        $semister = new Semister();
        $semister->name = $request['semister_name'];
        $result = $semister->save();

        if($result){
            return back()->with('success','Semister Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function add_department(Request $request)
    {
        $request->validate(
            [
                'department_name' => 'required',
            ]
        );


        //Insert Query
        $department = new Department();
        $department->name = $request['department_name'];
        $result = $department->save();

        if($result){
            return back()->with('success','Department Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function add_session(Request $request)
    {
        $request->validate(
            [
                'session_name' => 'required',
            ]
        );


        //Insert Query
        $session = new Session();
        $session->name = $request['session_name'];
        $result = $session->save();

        if($result){
            return back()->with('success','Session Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function add_possion(Request $request)
    {
        $request->validate(
            [
                'position_name' => 'required',
            ]
        );


        //Insert Query
        $posstion = new TeacherPossion();
        $posstion->name = $request['position_name'];
        $result = $posstion->save();

        if($result){
            return back()->with('success','Possion Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
