<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Nitgen;

class NitgenController extends Controller
{
    public function getData()
    {
        $data = Nitgen::where('UserID',3199)
        ->get();

        return response()->json(['data'=>$data]);
    }
}
