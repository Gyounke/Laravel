<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            $message->to('sieben.nicola@gmail.com', 'Admin');
        }); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
