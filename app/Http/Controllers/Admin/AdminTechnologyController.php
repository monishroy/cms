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
        $technology = Technology::all();
        return view('admin.technology', compact('technology'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('technology.store');
        $title = 'Add Technology';
        return view('admin.add-technology', compact('url','title'));
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
        
        //Insert Notice
        $technology = new Technology();
        $technology->name = $request->name;
        $technology->image1 = $imageName1;
        $technology->image2 = $imageName2;
        $technology->image3 = $imageName3;
        $technology->content = $request->content;
        $result = $technology->save();

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
        $url = route('technology.update', $id);
        $title = 'Update Technology';
        $technology = Technology::find($id);
        return view('admin.add-technology', compact('url','title','technology'));
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
        $request->validate(
            [
                'name' => 'required',
                'content' => 'required',
            ]
        );

        if($request->image1){

            $imageName1 = date('dmY').time()."-1.".$request->file('image1')->getClientOriginalExtension();
            $request->file('image1')->storeAs('public/technology',$imageName1);

            $technology = Technology::find($id);
            $technology->image1 = $imageName1;
           $technology->save();
            

        }elseif($request->image2){

            $imageName2 = date('dmY').time()."-2.".$request->file('image2')->getClientOriginalExtension();
            $request->file('image2')->storeAs('public/technology',$imageName2);

            $technology = Technology::find($id);
            $technology->image2 = $imageName2;
            $technology->save();
            

        }elseif($request->image3){

            $imageName3 = date('dmY').time()."-3.".$request->file('image3')->getClientOriginalExtension();
            $request->file('image3')->storeAs('public/technology',$imageName3);

            $technology = Technology::find($id);
            $technology->image3 = $imageName3;
            $technology->save();
            

        }else{
           
        }
        $technology = Technology::find($id);
        $technology->name = $request->name;
        $technology->content = $request->content;
        $result = $technology->save();
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
