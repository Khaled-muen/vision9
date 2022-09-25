<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form_data(Request $data_sent)
    {
        dd($data_sent->all());
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('f_name'));
        $name=$request->f_name;
        $lname=$request->l_name;
        $email=$request->email;
        return "Welcome  Mr.$name $lname  your Email is  $email";//ه>ا الكلام خطا لانه صار عندي عرض داخل  controller وه>ا غير صحيح
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request3)
    {
        $name=$request3->name;
        $email=$request3->email;
        $message=$request3->message;
        return view('forms.f2table')->with('name',$name)->with('email',$email)->with('message',$message);
    }

    public function full_form()
    {
        return view('forms.full_form');
    }

    public function full_form_data(Request $request){
        // dd($request->all(''));
        // dd($request->except('_token'));
        // dd($request->only('name'));

    }
    public function form4(){
        return view('forms.form4');
    }
    public function form4_data(Request $request4){
        $request4->validate([
            'name'=>'required|min:2',
            'email'=>'required',
            'age'=>'required'
        ]);
        dd($request4->all());
    }
}
