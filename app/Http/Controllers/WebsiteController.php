<?php

namespace App\Http\Controllers;

use App\Mail\SupportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function welcome()
    {
        return view('website.welcome');
    }

    public function about()
    {
        return view('website.about');
    }
    public function services()
    {
        return view('website.services');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function submit(Request $request)
    {
        $data =   $this->validate($request, [
            "name" => "required|string|min:4|max:50",
            "subject" => "required|string|min:15",
            "email" => "required|email|max:255",
            "phone_number" => "required|numeric|digits:10",
            "message" => "required|string|max:500",
            "security_quiz" => "required",
        ]);
        if ($request->security_quiz != $request->response) {
            return redirect()->back()->with('error', 'Wrong Security Response')->withInput($request->all());
        }
        Mail::to('support@geopima.com')->send(new SupportMail($data));
        return redirect()->back()->with('success', 'Message Sent, Our Representatives will get back to you shortly');
    }
}
