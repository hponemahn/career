<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class MymarController extends Controller
{
    public function inquiry(Request $request)
    {
        Inquiry::create($request->all());
        return 1;
    }
}
