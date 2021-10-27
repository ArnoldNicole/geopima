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
}
