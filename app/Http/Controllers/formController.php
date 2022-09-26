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
        return view('forms.f2table')->with('name', $name)->with('email', $email)->with('message', $message);
    }

    public function full_form()
    {
        return view('forms.full_form');
    }

    public function full_form_data(Request $request)
    {
        // dd($request->all(''));
        // dd($request->except('_token'));
        // dd($request->only('name'));

    }
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


}
