<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes=request()->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);


        User::creat($attributes);

        return redirect('/login')->with('success','your account has been created');
    }
}


