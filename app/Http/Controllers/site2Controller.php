<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site2Controller extends Controller
{
    public function index()
    {
        return view('site2.index');
    }

    public function about()
    {
        return view('site2.about');
    }

    public function post()
    {
        return view('site2.post');
    }

    public function contact_us()
    {
        return view('site2.contact');
    }

    public function master()
    {
        return view('site2.master');
    }
}
