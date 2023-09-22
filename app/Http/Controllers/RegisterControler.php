<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterControler extends Controller
{
    public function create()
{
return view('register');
}
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
           'email'=>'required|string|email',
            'password'=>'required|confirmed'
        ]);
       $userpoisk = User::where('email', $request->email)->first();
       if ($userpoisk){

           return redirect()->back()->withInput()->withErrors( ['email'=> 'email занят']);
       }

     $user = User::create([
         'name'=>$request->name,
         'email'=>$request->email,
        'password'=> Hash::make($request->password)
     ]);

     Auth::login($user);

     return redirect('/account');

    }

}
