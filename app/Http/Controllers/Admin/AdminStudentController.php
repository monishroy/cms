<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semister;
use App\Models\Department;
use App\Models\Session;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('students.store');
        $title_header = 'Add Student';
        $semister = Semister::all();
        $department = Department::all();
        $session = Session::all();
        
        return view('admin.add-student', compact('url','title_header','semister','department','session'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'email' => 'required|email|unique:users,email',
            'roll' => 'required|unique:students,roll',
            'registration' => 'required|unique:students,registration',
            'session' => 'required',
            'department' => 'required',
            'semister' => 'required',
            'phone' => 'required|max:12|min:11|unique:users,phone',
            'gPhone' => 'required|max:12|min:11',
            'address' => 'required',
        ]);


        //Insert Query
        $student = new Student();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        if(is_file($request->image)){
            $imageName = date('dmY').time()."-user.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/users',$imageName);
            $student->image = $imageName;
        }else{
            $student->image = rand(1, 5).'.png';
        }
        $student->email = $request->email;
        $student->roll = $request->roll;
        $student->registration = $request->registration;
        $student->department_id = $request->department;
        $student->session_id = $request->session;
        $student->phone = $request->phone;
        $student->gPhone = $request->gPhone;
        $student->semister_id = $request->semister;
        $student->address = $request->address;
        $result = $student->save();

        //Insert Query
        $user = new ModelsUser();
        $user->name = $request->fname.' '.$request->lname;
        if(is_file($request->image)){
            $user->image = $imageName;
        }else{
            $user->image = rand(1, 5).'.png';
        }
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make('123456');
        $result = $user->save();

        if($result){
            return back()->with('success','Student Add Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        if(is_null($student)){
            return back()->with('error','Student Not Found!');
        }else{
            $url = route('students.update', $id);
            $title_header = 'Update Student';
            $semister = Semister::all();
            $department = Department::all();
            $session = Session::all();

            $data = compact('student','url','title_header','semister','department','session');
            return view('admin.add-student')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'email' => 'required|email',
            'roll' => 'required',
            'registration' => 'required',
            'session' => 'required',
            'department' => 'required',
            'semister' => 'required',
            'phone' => 'required|max:12|min:11',
            'gPhone' => 'required|max:12|min:11',
            'address' => 'required',
        ]);

        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        if(is_file($request->image)){
            $imageName = date('dmY').time()."si-$student->id.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/users',$imageName);
            
            // if($student->image != '1.png' && $student->image != '2.png' && $student->image != '3.png' && $student->image != '4.png' && $student->image != '5.png'){
            //     $imagePath = public_path('storage/users/'. $student->image);
            //     unlink($imagePath);
            // }
            $student->image = $imageName;
        }
        $student->roll = $request['roll'];
        $student->registration = $request['registration'];
        $student->department_id = $request['department'];
        $student->session_id = $request['session'];
        $student->phone = $request['phone'];
        $student->gPhone = $request['gPhone'];
        $student->semister_id = $request['semister'];
        $student->address = $request['address'];
        $result = $student->save();

        if($result){
            return back()->with('success','Student Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $$result = Student::find($id)->delete();

        if($result){
            return back()->with('success','Technology Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

}
