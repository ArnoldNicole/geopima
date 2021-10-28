<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->validate($request, [
            "name" => "required|string|min:4|alpha",
            "subject" => "required|string|min:15",
            "email" => "required|email|max:255",
            "message" => "required|string|max:500",
            "security_quiz" => "required",
        ]);
        if ($request->security_quiz != $request->response) {
            return redirect()->back()->with('error', 'Wrong Security Response')->withInput($request->all());
        }
        return redirect()->back()->with('success', 'Message Sent, Our Representatives will get back to you shortly');
    }
}
