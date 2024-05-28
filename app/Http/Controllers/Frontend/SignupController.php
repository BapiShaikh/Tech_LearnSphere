<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    //
    public function index(){
        return view('frontend.signup');
    }
    public function submit_data(Request $request){
        //dd($request->all());

        $request->validate(
            [
                'fname'     => 'required',
                'lname'     => 'required',
                'phone'     => 'required|regex:/^[0-9]{10}$/',
                'pincode'   => 'required|integer|min:100000|max:999999',
                'age'       => 'required|integer|between:18,40',
                'gender'    => 'required',
                'city'      => 'required',
                'qualification'    => 'required',
                'date'      => 'required|date',
                'email'     => 'required|email',
                'address'   => 'required',
                'password'  => 'required|between:4,16',
                'image'     => 'required|image|max:2048'
            ]
        );

        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $phone= $request->input('phone');
        $pincode=$request->input('pincode');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $city=$request->input('city');
        $qualification=$request->input('qualification');
        $date=$request->input('date');
        $email= $request->input('email');
        $address=$request->input('address');
        $password= md5($request->input('password'));

        if($request->file("image"))
        $file= $request->file("image");
        $fileName= time()."_".$file->getClientOriginalName();
        $uploadLocation= "./uploads";
        $file->move( $uploadLocation,$fileName);

    $data=[
        'user' => 'CLIENT',
        'auth' => 0,
        'fname'=>$fname,
        'lname'=>$lname,
        'phone'=>$phone,
        'pincode'=>$pincode,
        'age'=>$age,
        'gender'=>$gender,
        'city'=>$city,
        'qualification'=>$qualification,
        'date'=>$date,
        'email'=>$email,
        'address'=>$address,
        'password'=>$password,
        'image'=>$uploadLocation."/".$fileName
    ];
  
    $data_table=DB::table('project_data')->where('email','=',$email)->get();
    if(empty($data_table[0])){
        DB::table('project_data')->insert($data);
        return redirect("/login");

    }else{
        return redirect('/signup')->with('message','Email already exist,Please try another email');
    }

    //$data_table2=DB::table('project_data')->get($data);
    //dd($data_table);
    //return view('login')->with(['userInfo'=>$data]);

}



public function display_data():View
    {
        // $allUser=DB::table('project_data')->get();
        // return view("display")->with(['allInfo'=>$allUser]);  //display.blade.php
    // $id = session()->get('id');
    $email=session()->get('email');
    $data = DB::table('project_data')->where('email', '=', $email)->get();
    return view('display')->with(['allInfo' => $data]);

    }
public function data_edit($ep):View
    {
        $editId=$ep;
        $user= DB::table('project_data')->where("user_id","=",$editId)->get();
        //dd($user);
        return view("edit")->with(['editInfo'=>$user[0]]);                  //edit.blade.php
    }
    public function data_update(Request $request){
        //dd($request->all());

        $request->validate(
            [
                'fname'     => 'required',
                'lname'     => 'required',
                'phone'     => 'required|regex:/^[0-9]{10}$/',
                'pincode'   => 'required|integer|min:100000|max:999999',
                'age'       => 'required|integer|between:18,40',
                'gender'    => 'required',
                'city'      => 'required',
                'qualification'    => 'required',
                'date'      => 'required|date',
                'email'     => 'required|email',
                'address'   => 'required',
            ]
        );
        $userid= $request->input("hid");
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $phone= $request->input('phone');
        $pincode=$request->input('pincode');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $city=$request->input('city');
        $qualification=$request->input('qualification');
        $date=$request->input('date');
        $email= $request->input('email');
        $address=$request->input('address');

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $fileName = time() . "_" . $file->getClientOriginalName();
            $uploadLocation = "./uploads";
            $file->move($uploadLocation, $fileName);
            $imagePath = $uploadLocation . "/" . $fileName;
       }else {

            $oldImageData = DB::table('project_data')->where("user_id", "=", $userid)->first();
            // dd($oldImageData);
            $imagePath = $oldImageData->image;
       }

    $Updatedata=[
        'user'=>'CLIENT',
        'auth'=>0,
        'fname'=>$fname,
        'lname'=>$lname,
        'phone'=>$phone,
        'pincode'=>$pincode,
        'age'=>$age,
        'gender'=>$gender,
        'city'=>$city,
        'qualification'=>$qualification,
        'date'=>$date,
        'email'=>$email,
        'address'=>$address,

        'image'=>$imagePath
    ];
    $data1=DB::table('project_data')->where("user_id","=",$userid)->update($Updatedata);
   // $data=DB::table('project_data')->where("user_id","=",$userid)->get();
    $data = DB::table('project_data')->where('user','=','ADMIN')->first();
    // $data = DB::table('project_data')
    //             ->where('email', $email)
    //             ->orWhere('phone', $email)
    //             ->first();
    //return view('form')->with(['userInfo'=>$data]);
   // return redirect('/display');
   if ($data) {
    $user_type = $data->user;
    $request->session()->put('session_id', $userid);
    $request->session()->put('user_type', $user_type);

    if ($user_type == 'ADMIN') {
        return redirect('/admindisplay');
    }
}
        return view('display');
    }


public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->forget('session_id');
        return redirect('/login')->with('message','Logout Successfully');
    }


}
