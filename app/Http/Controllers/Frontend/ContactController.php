<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function index(){
        $name=session()->get('name');
        $image=session()->get('image');
        if(isset($name)){
            return view('frontend.contact')->with(['name'=>$name,'image'=>$image]);

        }else{
            return view('frontend.contact');
        }
    }
    public function contact_data(Request $request){
        $request->validate([
            'name'     => 'required',
            'age'      => 'required|integer|between:18,40',
            'phone'    => 'required|regex:/^[0-9]{10}$/',
            'email'    => 'required|email',
            'help'     => 'required'
        ]);

        $data = [
            'name'  => $request->input('name'),
            'age'   => $request->input('age'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'help'  => $request->input('help')
        ];

        $data_table=DB::table('contact')->insert($data);
        return view('frontend.contactus');
        //dd($data_table);
        //return view('form')->with(['userInfo'=>$data]);
        //return redirect('/display');
    }
}

