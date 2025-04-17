<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class MymarController extends Controller
{
    public function inquiry(Request $request)
    {
        Inquiry::create($request->all());

        $phone = $request->phone;
        $inquiry = $request->message;

        Mail::to('hponemahn@gmail.com')->queue(new InquiryMail($phone, $inquiry));

        return 1;
    }
}
