<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function changepassword($cp):View
    {
        $userid=$cp;
        $data=DB::table('project_data')->where('user_id','=',$userid)->get();
        return view('changepass')->with(['passwordinfo'=>$data[0]]);
    }
    public function newpassword(Request $request)
    {
        $userid=$request->input('uid');
        $oldp=md5($request->input('oldp'));
        $newp=md5($request->input('newp'));
        $confp=md5($request->input('confp'));
        $user=DB::table('project_data')->where('user_id','=',$userid)->get();
        $password_db=$user[0]->password;
        if($password_db==$oldp)
        {
            if($oldp!=$newp)
            {
                if($newp==$confp)
                {
                    $data=['password'=>$newp];
                    DB::table('project_data')->where('user_id','=',$userid)->update($data);
                    return redirect('/login')->with('message','Password changed successfully');
                }
                else
                {
                    return redirect('/login')->with('message','New & confirm password doesnot match');
                }
            }
            else
            {
                return redirect('/login')->with('message','old password and new password are same');
            }
        }
        else
        {
            return redirect('/login')->with('message','old password doesnot match');
        }
    }
    
}
