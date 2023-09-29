<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
       $login = $request-> only(['email','password']);


        if (Auth::attempt($login)) {
            return redirect('/account');
        }

        return redirect()->back()->withInput()->withErrors( ['email'=> 'Неправильный email или пароль']);
    }


    public function showAccount()
    {
        $user = Auth::user();  // Получаем аутентифицированного пользователя

        if ($user) {
            return view('account', ['name' => $user->name, 'email' => $user->email]);
        } else {
            return redirect('/login'); // Обрабатываем случай, когда пользователь не аутентифицирован
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('cart');
        Auth::logout();

        return redirect()->route('home');

    }

}
