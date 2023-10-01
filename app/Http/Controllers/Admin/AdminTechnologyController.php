<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class AdminTechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['technology'] = Technology::all();

        return view('admin.technology', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['url'] = route('a-technology.store');
        $data['title'] = 'Add Technology';

        return view('admin.add-technology', $data);
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
            'name' => 'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            'image2' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            'image3' => 'required|image|mimes:jpg,png,jpeg|max:1024',        
            'content' => 'required',
        ]);

        $imageName1 = date('dmY').time()."-1.".$request->file('image1')->getClientOriginalExtension();
        $imageName2 = date('dmY').time()."-2.".$request->file('image2')->getClientOriginalExtension();
        $imageName3 = date('dmY').time()."-3.".$request->file('image3')->getClientOriginalExtension();

        $request->file('image1')->storeAs('public/technology',$imageName1);
        $request->file('image2')->storeAs('public/technology',$imageName2);
        $request->file('image3')->storeAs('public/technology',$imageName3);
        
        //Insert Technology
        $result = Technology::create([
            'name' => $request->name,
            'image1' => $imageName1,
            'image2' => $imageName2,
            'image3' => $imageName3,
            'content' => $request->content,
        ]);

        if($result){
            return back()->with('success','Technology Add Successfully');
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
        $data['url'] = route('a-technology.update', $id);
        $data['title'] = 'Update Technology';
        $data['technology'] = Technology::findOrFail($id);

        return view('admin.add-technology', $data);
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
            'name' => 'required',
            'image1' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'image2' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'image3' => 'nullable|image|mimes:jpg,png,jpeg|max:1024', 
            'content' => 'required',
        ]);

        if($request->image1){

            $imageName1 = date('dmY').time()."-1.".$request->file('image1')->getClientOriginalExtension();
            $request->file('image1')->storeAs('public/technology',$imageName1);

            $result = Technology::findOrFail($id)->update([
                'name' => $request->name,
                'image1' => $imageName1,
                'content' => $request->content,
            ]);
            

        }elseif($request->image2){

            $imageName2 = date('dmY').time()."-2.".$request->file('image2')->getClientOriginalExtension();
            $request->file('image2')->storeAs('public/technology',$imageName2);

            $result = Technology::findOrFail($id)->update([
                'name' => $request->name,
                'image2' => $imageName2,
                'content' => $request->content,
            ]);
            

        }elseif($request->image3){

            $imageName3 = date('dmY').time()."-3.".$request->file('image3')->getClientOriginalExtension();
            $request->file('image3')->storeAs('public/technology',$imageName3);

            $result = Technology::findOrFail($id)->update([
                'name' => $request->name,
                'image3' => $imageName3,
                'content' => $request->content,
            ]);

        }else{

            $result = Technology::findOrFail($id)->update([
                'name' => $request->name,
                'content' => $request->content,
            ]);
            
        }

        if($result){
            return back()->with('success','Technology Update Successfully');
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
        
        $result = Technology::find($id)->delete();

        if($result){
            return back()->with('success','Technology Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
       
    }

    
}
