<?php

namespace App\Http\Controllers;

use App\Cakes;
use App\Cofes;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function menu()
    {
        $cofes = Cofes::all();
        $cakes = Cakes::all();

        return view('menu', compact('cofes', 'cakes'));
    }
}
