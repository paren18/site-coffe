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
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|confirmed'
        ]);

        $userExists = User::where('email', $request->email)->first();
        if ($userExists) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email уже занят']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $avatar = new \Laravolt\Avatar\Avatar;
        $svgAvatar = $avatar->create($request->name)->toSvg();

        $svgFilePath = storage_path('app/public/avatar-' . $user->id . '.svg');
        file_put_contents($svgFilePath, $svgAvatar);

        Auth::login($user);

        return redirect('/account');
    }


}
