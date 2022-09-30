<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $name = $request->f_name;
        $lname = $request->l_name;
        $email = $request->email;
        return "Welcome  Mr.$name $lname  your Email is  $email"; //ه>ا الكلام خطا لانه صار عندي عرض داخل  controller وه>ا غير صحيح
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request3)
    {
        $name = $request3->name;
        $email = $request3->email;
        $message = $request3->message;
        Mail::to($email)->send(new TestMail($request3->except('_token')));
        return view('forms.f2table')->with('name', $name)->with('email', $email)->with('message', $message);
    }

    // public function full_form()
    // {
    //     return view('forms.full_form');
    // }

    // public function full_form_data(Request $request)
    // {
    //     // dd($request->all(''));
    //     // dd($request->except('_token'));
    //     // dd($request->only('name'));

    // }
    public function form4()
    {
        return view('forms.form4');
    }
    public function form4_data(Request $request4)
    {
        $request4->validate([
            'name' => 'required|min:2|max:20',
            'email' => 'required',
            'age' => 'required|numeric|gt:17|lt:100'
        ]);
        // dd($request4->all());
        // $arr=[];
        // foreach($request4->all() as $key=>$value){
        //     $arr[$key]='required';
        // }
        // $request4->validate($arr);
        $name =htmlspecialchars($request4->name);
        $email = $request4->email;
        $age = $request4->age;
        return view('forms.f4table', compact('name', 'email', 'age'));
    }
    // public function test($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

        public function form5()
        {
            return view('forms.form5');
        }

        public function form5_data(Request $request5)
        {
            $request5->validate([
                'image'=>['required','image','mimes:png,jpg','max:100']//max=size
            ]);
            // $name=rand().time().$request5->file('image')->getClientOriginalName();
            $name=rand().'_'.rand().rand().'_'.rand().time().'.'.$request5->file('image')->getClientOriginalExtension();
            $request5->file('image')->move(public_path('file_uploads'),$name);
            dd($request5->all());
        }
        public function full_form()
        {
            return view('forms.full_form');
        }
        public function full_form_data(Request $request6)
        {
            $request6->validate([
                'name'=>'required|min:10|max:50',
                'email'=>'required|email',
                'phone'=>'required|numeric',
                'age'=>'required|numeric|gt:18|lt:100',
                'gender'=>'required',
                'interests'=>'required',
                'favorite'=>'required',
                'image'=>'required|image|mimes:jpg,png|max:100000',
                'country'=>'required'
            ]);
            $name_file=rand().time().$request6->file('image')->getClientOriginalName();
            $request6->file('image')->move(public_path('upload'),$name_file);
            $name=$request6->name;
            $email=$request6->email;
            $phone=$request6->phone;
            $age=$request6->age;
            $gender=$request6->gender;
            $favorite=$request6->favorite;
            $image=$name_file;
            $interests=array($request6->interests);
            $country=$request6->country;
            return view('forms.f6table',compact('name','email','phone','age','gender','favorite','image','country','interests'));
        }
}
