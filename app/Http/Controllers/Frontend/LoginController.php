<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }
    // public function admindisplay_data(): View
    // {

    //     $alldata = DB::table('project_data')->get();


    //     return view('admindisplay')->with(['allInfo' => $alldata, 'user' => 'CLIENT']);
    // }


    // public function login_data(Request $request)
    // {
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     // Fetching user data based on email or phone
    //     $data = DB::table('project_data')
    //                 ->where('email', $email)
    //                 ->orWhere('phone', $email)
    //                 ->first();

    //     // Check if user exists
    //     if (!$data) {
    //         return redirect('/login')->with('message', 'User not found');
    //     }

    //     // Verify password
    //     $password_db = $data->password;
    //     if ($password_db != $password) {
    //         return redirect('/login')->with('message', 'Password does not match');
    //     }

    //     // Set session and redirect based on user role
    //     $user_type = $data->user;
    //     if ($user_type == 'ADMIN') {
    //         // If user is admin, redirect back to login with a message
    //         return redirect('/admindisplay');
    //     } else {
    //         // If user is client, proceed with setting session and redirection
    //         $uid = $data->user_id;
    //         $request->session()->put('session_id', $uid);
    //         return redirect('/display');
    //     }
    // }
    public function admindisplay_data(Request $request)
    {

        if ($request->session()->get('user_type') != 'ADMIN') {
            return redirect('/login')->with('message', 'Unauthorized access');
        }

        $search = $request->input('search', '');

        $query = DB::table('project_data')->where('user', 'CLIENT');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('fname', '=',  $search)
                  ->orWhere('email', '=', $search);
            });
        }

        $customer = $query->get();

        return view('admindisplay')->with('allInfo', $customer);
    }

public function login_data(Request $request)
{
    $email = $request->input('email');
    $password = md5($request->input('password'));

    // Fetching user data based on email or phone
    $data = DB::table('project_data')
                ->where('email', $email)
                ->orWhere('phone', $email)
                ->first();

    // Check if user exists
    if (!$data) {
        return redirect('/login')->with('message', 'User not found');
    } else {
        // Check if the user is blocked by the admin
        if ($data->auth != 0) {
            return redirect('/login')->with('message', 'You are blocked by admin');
        } else {
            $password_db = $data->password;
            if ($password_db != $password) {
                return redirect('/login')->with('message', 'Password does not match');
            }

            // Set session and redirect based on user role
            $user_type = $data->user;
            $request->session()->put('session_id', $data->user_id);
            $request->session()->put('user_type', $user_type);

            if ($user_type == 'ADMIN') {
                return redirect('/admindisplay');
            } else {
                return redirect('/display');
            }
        }
    }
}


    public function block($blk)
    {
        $userid=$blk;
        DB::table('project_data')->where('user_id','=',$userid)->update(['auth'=>1]);
        return redirect('/admindisplay')->with('message','User has been blocked');
    }
    public function unblock($ublk)
    {
        $userid=$ublk;
        DB::table('project_data')->where('user_id','=',$userid)->update(['auth'=>0]);
        return redirect('/admindisplay')->with('message','User has been unblocked');
    }
    public function data_delete($del)
{
    $delId= $del;
    $user= DB::table('project_data')->where("user_id","=",$delId)->delete();
    return redirect('/admindisplay');

}
public function comment_index(){
    return view('review');
}
public function comment_data(Request $request){

    $commentdata=$request->input('comment');

    $comdata=[
        'comment'=>$commentdata
    ];

    DB::table('commentdata')->insert($comdata);
    $alldata = DB::table('commentdata')->get();
    return view('review')->with(['commentinfo'=>$alldata]);
    //return redirect('/review');

}
public function buyNow()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to login page if not authenticated
        }

        // Check if the authenticated user's data exists in the user_profiles table
        $user = Auth::user();
        $userProfile = DB::table('project_data')->where('user_id', $user->id)->first();

        if (!$userProfile) {
            // Redirect to login page if user data does not exist in the database
            return redirect('/login');
        }

        // If authenticated and user data exists, proceed with the "Buy Now" logic
        return view('buy-now'); // Replace 'buy-now' with your actual view name
    }

    public function subscribe(Request $request)
    {
        $email= $request->input('email');
        $user_id=session()->get('id');
        $user= DB::table('project_data')->where('email','=',$email)->where('user_id','=',$user_id)->get();
        if(empty($user[0]))
        {
            return view('login');
        }
        else
        {
            return redirect('/home')->with('message1','Subscribed');
        }
    }
}
