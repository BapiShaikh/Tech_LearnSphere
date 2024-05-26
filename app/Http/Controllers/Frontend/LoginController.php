<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        $id=session()->get('user_id');
        $user_type=session()->get('user');

        if (!isset($user_type)) {
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

    public function login_data(Request $request)
    {
        $emailOrPhone = $request->input('email');
        $password = md5($request->input('password'));

        $data = DB::table('project_data')
                    ->where('email', $emailOrPhone)
                    ->orWhere('phone', $emailOrPhone)
                    ->first();
        if (!$data) {
            return redirect('/login')->with('message', 'User not found');
        }else{
            if ($data->auth != 0) {
                return redirect('/login')->with('message', 'You are blocked by admin');
            }else{
                $password_db=$data->password;
                if ($password_db != $password) {
                    return redirect('/login')->with('message', 'Password does not match');
                }else{
                    $id=$data->user_id;
                    $user_type=$data->user;
                    $name=$data->fname;
                    $image=$data->image;
                    $email=$data->email;
                    $phone=$data->phone;
                    $request->session()->put('id',$id);
                    $request->session()->put('user',$user_type);
                    $request->session()->put('name',$name);
                    $request->session()->put('email',$email);
                    $request->session()->put('phone',$phone);
                    $request->session()->put('image',$image);
                    if($user_type=='ADMIN'){
                        return redirect('/admindisplay');
                    } else {
                        return redirect('/display');
                    }
                }
            }
        }
    }

    // public function profile()
    // {
    //     $userId = session()->get('session_id');

    //     if (!$userId) {
    //         return redirect('/login');
    //     }

    //     $allInfo = DB::table('project_data')->where('user_id', $userId)->get();

    //     return view('profile', ['allInfo' => $allInfo]);
    // }

    public function comment_index()
    {
        return view('review');
    }

    public function comment_data(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        DB::table('commentdata')->insert(['comment' => $request->input('comment')]);

        $allData = DB::table('commentdata')->get();

        return view('review', ['commentinfo' => $allData]);
    }

    // public function subscribe(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $email = $request->input('email');
    //     $userId = session()->get('session_id');

    //     if (!$userId) {
    //         return redirect('/login');
    //     }

    //     $user = DB::table('project_data')->where('email', $email)->where('user_id', $userId)->first();

    //     if (!$user) {
    //         return redirect('/login')->with('message', 'User not found');
    //     } else {
    //         return redirect('/home')->with('message1', 'Subscribed');
    //     }
    // }


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
}
