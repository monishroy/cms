<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicExam;
use App\Models\BloodGroup;
use App\Models\Board;
use App\Models\Department;
use App\Models\Position;
use App\Models\Semister;
use App\Models\Session;
use Illuminate\Http\Request;

class AdminSetupController extends Controller
{
    public function index()
    {
        $data['semister'] = Semister::all();
        $data['department'] = Department::all();
        $data['session'] = Session::all();
        $data['position'] = Position::all();
        $data['blood_group'] = BloodGroup::all();
        $data['boards'] = Board::all();
        $data['academic_exams'] = AcademicExam::all();

        return view('admin.setup', $data);
    }
    
    public function semister_store(Request $request)
    {
        $request->validate([
            'semister_name' => 'required',
        ]);

        //Insert Semister
        $result = Semister::create([
            'name' => $request->semister_name,
        ]);

        if($result){
            return back()->with('success','Semister Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function department_store(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
        ]);

        //Insert Department
        $result = Department::create([
            'name' => $request->department_name,
        ]);

        if($result){
            return back()->with('success','Department Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function session_store(Request $request)
    {
        $request->validate([
            'session_name' => 'required',
        ]);

        //Insert Session
        $result = Session::create([
            'name' => $request->session_name,
        ]);

        if($result){
            return back()->with('success','Session Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function possion_store(Request $request)
    {
        $request->validate([
            'position_name' => 'required',
        ]);

        //Insert Position
        $result = Position::create([
            'name' => $request->position_name,
        ]);

        if($result){
            return back()->with('success','Possion Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function blood_group_store(Request $request)
    {
        $request->validate([
            'blood_group' => 'required',
        ]);

        //Insert Blood Group
        $result = BloodGroup::create([
            'name' => $request->blood_group,
        ]);

        if($result){
            return back()->with('success','Blood Group Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function board_store(Request $request)
    {
        $request->validate([
            'board_name' => 'required',
        ]);

        //Insert Board
        $result = Board::create([
            'name' => $request->board_name,
        ]);

        if($result){
            return back()->with('success','Board Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    public function academic_exam_store(Request $request)
    {
        $request->validate([
            'academic_exam' => 'required',
        ]);

        //Insert Academic Exam
        $result = AcademicExam::create([
            'name' => $request->academic_exam,
        ]);

        if($result){
            return back()->with('success','Academic Exam Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
