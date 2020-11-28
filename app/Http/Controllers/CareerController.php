<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function result(Request $request)
    {
        $checkResult = $request->checkResult;
        $cr = $checkResult[0] . "" . $checkResult[1] . "" . $checkResult[2] . "" . $checkResult[3];



        

        return view('layouts/result');
    }
}
