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
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();
        $position = Position::all();
        $blood_group = BloodGroup::all();
        $boards = Board::all();
        $academic_exams = AcademicExam::all();

        $data = compact('semister','department','session','position','blood_group','boards','academic_exams');
        return view('admin.setup')->with($data);
    }
    
    public function semister_store(Request $request)
    {
        $request->validate([
            'semister_name' => 'required',
        ]);
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

    public function department_store(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
        ]);


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

    public function session_store(Request $request)
    {
        $request->validate([
            'session_name' => 'required',
        ]);
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

    public function possion_store(Request $request)
    {
        $request->validate([
            'position_name' => 'required',
        ]);

        //Insert Query
        $posstion = new Position();
        $posstion->name = $request['position_name'];
        $result = $posstion->save();

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

        //Insert Query
        $blood_group = new BloodGroup();
        $blood_group->name = $request['blood_group'];
        $result = $blood_group->save();

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

        //Insert Query
        $board = new Board();
        $board->name = $request['board_name'];
        $result = $board->save();

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

        //Insert Query
        $exam = new AcademicExam();
        $exam->name = $request['academic_exam'];
        $result = $exam->save();

        if($result){
            return back()->with('success','Academic Exam Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
