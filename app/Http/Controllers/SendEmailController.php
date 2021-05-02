<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{  
     public function index()
     {
        return view('contact');
     }

    public function send(Request $request)
     {   
        $this->validate($request,[
            'fullName' => 'required',
            'phone'=> 'required',
            'email' => 'required|email',
            'company' => 'required',
            'country' => 'required',
            'services' => 'required',
            'hearAboutUs' => 'required',
            'projectDescription' => 'required'
        ]);

        $data = array(
            'fullName' => $request->fullName,
            'phone'=> $request->phone,
            'email' => $request->email,
            'company' => $request->company,
            'country' => $request->country,
            'services' => $request->services,
            'hearAboutUs' => $request->hearAboutUs,
            'projectDescription' => $request->projectDescription,
        );

        Mail::to('oludavidconnect@gmail.com')->send(new SendMail($data));
        
        return back()->with('success', 'Thanks for contacting us, expect to hear from us soon');
    }
}
