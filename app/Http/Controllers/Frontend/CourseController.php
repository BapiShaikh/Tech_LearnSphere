<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    //
    public function index(){
        $name=session()->get('name');
        if(isset($name)){
            return view('frontend.course')->with(['name'=>$name]);
        }else{
            return view('frontend.course');
        }


    }
    public function guide_index(){
        return view('frontend.guide');
    }
    public function interactive_index(){
        return view('frontend.interactive');
    }
    public function real_index(){
        return view('frontend.real');
    }

}
