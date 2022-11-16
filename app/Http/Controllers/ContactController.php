<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }
    /**
     * send mail function
     */
    public function contactus(Request $request)
    {
       #dd($request->all());
       $data = $request->all();
       Mail::to($request->email)->send(new ContactMail($data));
        return back()->with('status', 'Your message has been sent. Thank you!');
    }
}
