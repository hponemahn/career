<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CareerController extends Controller
{
    public function result(Request $request)
    {
        $type = $request->typeOne . "" . $request->typeTwo . "" . $request->typeThree . "" . $request->typeFour;

        return view('layouts/result', compact('type'));
    }
    
    public function payment (Request $request)
    {
        $type = $request->type;

        $res = \DB::table('results')->select('id')->latest('id')->first();
        $paymentID = 0;

        if (isset($res)) {
            $paymentID = $res->id + 1;
        } else {
            $paymentID = 1;
        }

        return view('layouts/payment', compact('type', 'paymentID'));
    }

    public function done (Request $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

        $fileName = "";

        // dd($request->file);

        if ($request->file) {
            $fileName = time().'.'.$request->file->extension();  
   
            $request->file->move(public_path('uploads'), $fileName);
        }

        \DB::table('results')->insert(
            ['user_id' => $data->id, 'selected_type' => $request->type, 'payment' => $request->payment, 'secret' => isset($request->secret) ? $request->secret : "", 'is_done' => 0, 'receipt' => $fileName]
        );

        return view('layouts/done');
    }
}
