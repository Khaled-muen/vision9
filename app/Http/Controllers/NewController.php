<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    // public function index( )
    // {
    //     $name="Ali";
    //     $desc="hello lorem5njnckjnekf";
    //     // return view("index")->with(/*key*/'name',/*value*/$name)->with(/*key*/'desc',/*value*/$desc);
    //     // return view("index",compact('name','desc'));
    //     return view("index",['name'=>$name,'desc'=>$desc]);
    // }

    // public function about()
    // {
    //     return "about page";
    // }

    // public function post($id=null)
    // {
    //     return "news post $id";
    // }
    // public function contact_data ()
    // {
    //     return'fff';
    // }
    // public function contact()
    // {
    //     return view('contact');
    // }
    public function index()
    {
        $title="First WebSite";
        $content="Graphic Artist - Web Designer - Illustrator";
        return view('site1.index',compact('title','content'));
    }
}
