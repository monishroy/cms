<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Upazila;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function fatchDistrict(Request $request)
    {
        $data['districts'] = District::where('division_id', $request->division_id)->get();

        return response()->json($data);
    }

    public function fatchUpazila(Request $request)
    {
        $data['upazilas'] = Upazila::where('district_id', $request->district_id)->get();

        return response()->json($data);
    }
}
