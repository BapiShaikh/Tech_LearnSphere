<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $name=session()->get('name');
        $image=session()->get('image');
        if(isset($name)){
            return view('frontend.home')->with(['name'=>$name,'image'=>$image]);

        }else{
            return view('frontend.home');
        }


    }
    public function article_index(){
        return view('frontend.article');
    }
    public function review_index(){
        return view('review');
    }



}
