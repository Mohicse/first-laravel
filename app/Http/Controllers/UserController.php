<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return $req->input();
        // return View('login.login');
        $user=User::where(['email'=>$req->email])->first();
        // dd($user);
        if(!$user ||!Hash::check($req->password,$user->password)) {
            return "username and password is not correct !";
        } else {
            $req->session()->put('user',$user);
           return redirect('/');
        }

    }
}
