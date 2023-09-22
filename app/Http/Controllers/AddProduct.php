<?php

namespace App\Http\Controllers;

use App\Cakes;
use App\Cofes;
use Illuminate\Http\Request;

class AddProduct extends Controller
{

    public function addcofes($id) {
        if (!auth()->check()) {
            return redirect()->back()->with('danger', 'Нужна регестрация');
        }

        $cofes = Cofes::findOrFail($id);
        $this->addToCart('cofes_' . $id, $cofes->name, $cofes->price, $cofes->opisanie, $cofes->photo_link);
        return redirect()->back()->with('success', 'Товар добавлен в корзину');
    }

    public function addcake($id) {
        if (!auth()->check()) {
            return redirect()->back()->with('danger', 'Нужна регестрация');
        }

        $cakes = Cakes::findOrFail($id);
        $this->addToCart('cakes_' . $id, $cakes->name, $cakes->price, $cakes->opisanie, $cakes->photo_link);
        return redirect()->back()->with('success', 'Товар добавлен в корзину');
    }


    public function cart(){
        return view('cart');
    }

    private function addToCart($key, $name, $price, $opisanie, $photo_link) {
        $cart = session()->get('cart', []);

        if(isset($cart[$key])) {
            $cart[$key]['quantity']++;
        } else {
            $cart[$key] = [
                'name'=> $name,
                'price'=> $price,
                'opisanie'=> $opisanie,
                'photo_link'=> $photo_link,
                'quantity'=> 1
            ];
        }

        session()->put('cart', $cart);
    }
    public function cartdelite($id)
    {

        if (session()->has('cart')) {
            $cart = session('cart');
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        return redirect()->back();
    }


}
