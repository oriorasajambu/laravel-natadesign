<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\InquiryFormRequest;
use App\Mail\InquiryPrice;
use App\Mail\SendContact;
use Exception;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public $target = "nat.adesign90@gmail.com";

    public function contactForm(ContactFormRequest $request)
    {
        $mail = $request->all();
        try {
            Mail::to($this->target)->send(new SendContact($mail));
        } catch(Exception $e) {
            return response()->json([
                'code' => 500,
                'success'   => false,
                'message'   => $e,
                'data'      => null,
            ], 500);
        }
        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Success',
            'data' => null,
        ], 200);
    }

    public function inquiryForm(InquiryFormRequest $request)
    {
        $mail = $request->all();
        try {
            Mail::to($this->target)->send(new InquiryPrice($mail));
        } catch(Exception $e) {
            return response()->json([
                'code' => 500,
                'success'   => false,
                'message'   => $e,
                'data'      => null,
            ], 500);
        }
        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Success',
            'data' => null,
        ], 200);
    }
}
