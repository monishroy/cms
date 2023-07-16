<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technology = Technology::all();

        $data = compact('technology');
        return view('frontend.technology')->with($data);
    }

    public function details($id)
    {
        $technology = Technology::find($id);
        if(is_null($technology)){
            return back()->with('error','Technology Not Found!');
        }else{
            $data = compact('technology');
            return view('frontend.technology-details')->with($data);
        }
    }
}
