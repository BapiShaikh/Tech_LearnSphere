<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $name=session()->get('name');
        $image=session()->get('image');
        if(isset($name)){
            return view('frontend.about')->with(['name'=>$name,'image'=>$image]);

        }else{
            return view('frontend.about');
        }
       
    }
}
