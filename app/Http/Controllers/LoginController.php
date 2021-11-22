<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
       if(auth()->attempt($attributes)) {
           session()->regenerate();
           return redirect('/home')->with('success', 'Goodbay!');
       }


    }

        public function destroy()
    {
        auth()->logout();
        return redirect('/home')->with('success','your account has been created');
    }
}
