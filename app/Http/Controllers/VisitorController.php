<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Facade\FlareClient\View;
use illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;
use illuminate\Support\Facades\Session;
// use DB;

class VisitorController extends Controller
{
    public function registration(Request $req)
    {
        // dd($req->all());

        $v_info= new Visitor();
        $v_info->name=$req->name;
        $user=Visitor::where('email',$req->email)->first();
        if($user==null){
            $v_info->email=$req->email;
            $v_info->designation=$req->des;

        $v_info->password=$req->password;
        $v_info->cpassword=$req->cpassword;
        $v_info->save();
        return redirect('login');
            }
            if($user)
            {
            echo "user found";
           }

    }

    public function login(Request $req)
    {
        $users = Visitor::where('email', '=', $req->input('email'))->first();
        // dd($users);
        if ($users === null)
        {
            echo "User Does not Exit";
        }
       else
        {
            return redirect('profile');
        }

    }
    public function profile()
    {
        $data=Visitor::all();
        return View('profile',compact('data'));
    }
    public function delete($id)
    {
        $data=Visitor::find($id);
        $data->delete();
        return redirect('profile');
    }

    public function editdata($id)
    {
        $editd=Visitor::find($id);

        return view('edit',compact('editd'));
    }

    public function update(Request $req ,$id)
    {
       $editd=Visitor::find($id);
       $editd->name=$req->input('name');;
       $editd->email=$req->input('email');;
       $editd->designation=$req->input('des');;
       $editd->password=$req->input('password');;
       $editd->cpassword=$req->input('cpassword');
       $editd->update();
       return redirect('profile');

    }

}
