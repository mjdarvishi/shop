<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;



class UserController extends Controller
{
    public function get_privilege()
    {
        $user = Auth::User();
        $privilege = $user->Privilege()->get();
        foreach ($privilege as $item) {
            if ($item->id == 1 || $item->id == 2 || $item->id == 3 || $item->id == 4) {
                return view('panel');
            } else
                return redirect('/');
        }

    }

    public function NewManeger()
    {
        if (Auth::user()->privilege()->find(1) != null)
            return view('new-maneger');
        else
            return redirect('/panel');
    }
    public function PostNewManeger(){
        $user = Auth::user();
        if($user->Privilege()->find(1)!= null)
        {
            $register = new RegisterController();
//            $validator = $register->validator(Request::input());
//            if ($validator->fails()) {
//                return $validator->messages()->toJson();
//            }
            // Create new user
            $user = new User();
            $user->name = Request::input('name');
            $user->email = Request::input('email');
            $user->password = Hash::make(Request::input('password'));
            $user->save();
            $user->Privilege()->attach(Request::input('privileges'));
            return redirect(url('/maneger-added'));
        }
        else{
            return redirect(url('/panel'));
        }
    }
}
