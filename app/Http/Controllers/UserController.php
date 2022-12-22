<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Hash;

class UserController extends Controller
{
    public function createUser()
    {
        return view('backend.user.index');
    }
    public function addUser(Request $req)
    {
        $user = new User();
        $user->name     = $req->userName;
        $user->email    = $req->userMail;
        $user->password = md5($req->userPassword);

        $user->save();
        return redirect()->back();
    }
    public function showPost()
    {
        $users = User::all();
        return view('backend.user.all',compact('users'));
    }
    public function editUser($id)
    {
        $user = User::find($id);
        return view('backend.user.edit',compact('user'));
    }
    public function updateUser(Request $req, $id)
    {
        $user = User::find($id);
        $user->name = $req->userName;
        $user->email = $req->userMail;
        $user->save();

        return redirect()->route('user.show');

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function resetPass($id)
    {
        $user = User::find($id);
        return view('backend.user.reset', compact('user'));
    }
    public function changePass(Request $req, $id)
    {
        $user = User::find($id);
        $pass1 = $req->newPassword;
        $pass2 = $req->newPassword2;

        if($pass1 == $pass2){
            $user->password = md5($pass1);
            $user->save();
            // $messege = "password changed successfully";
            return redirect()->route('user.show')->with('msg', "password changed successfully");
        }
        else{
            // $messege = "password not mached";
            return redirect()->back()->with('msg', "password not mached");
        }
        // return redirect()->back()->with('msg', $messege);
    }
}
