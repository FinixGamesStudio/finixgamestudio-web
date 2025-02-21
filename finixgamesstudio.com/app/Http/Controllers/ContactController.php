<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;



class ContactController extends Controller
{
    public function sendMail(Request $requset) {
        $data = $requset->except('_token');  
        
        Mail::to('gamestudiofinix@gmail.com')->send(new ContactFormMail($data));

        return response()->json(['message' => 'Email sent successfully!']);

    }
}
