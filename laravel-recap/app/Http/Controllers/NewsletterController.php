<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mail;

class NewsletterController extends Controller
{
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required|email', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        Mail::send('emails.newsletter', array( 
            'email' => $input['email'], 
        ), function($message) use ($request){ 
            $message->from($request->email); 
            $message->to('blisteinkevin@outlook.com', 'admin');
        }); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
