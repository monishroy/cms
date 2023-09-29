<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $data['technology'] = Technology::all();

        return view('frontend.technology', $data);
    }

    public function details($id)
    {
        $data['technology'] = Technology::findOrFail($id);
        
        return view('frontend.technology-details', $data);
        
    }
}
