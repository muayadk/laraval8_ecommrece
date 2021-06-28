<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req){
        $user =User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "user name or password";
        }
        else 
        {
            $req->session()->put('user',$user);
            return redirect('/');
           
        }

    }

    // funvtion to register 
    function register(Request $req)
    {
        //return $req->input();
       
        $user =new User;
        $user->userName=$req->email;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        echo"<script>alert('okay sign up success')</script>";
        
        
    }
}
