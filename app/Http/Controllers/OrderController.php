<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

    public function order(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
        ], [
            'address.required' => 'Введите адрес.',
        ]);

        $user = auth()->user()->email;
        $names = $_POST['names'];
        $prices = $_POST['prices'];
        $quantities = $_POST['quantities'];
        $totalPrice = $_POST['totalPrice'];
        $address = $_POST['address'];
// Создание строки с информацией о товарах
        $orderDetails = '';
        for ($i = 0; $i < count($names); $i++) {
            $orderDetails .= $names[$i] . ' (Цена: ' . $prices[$i] . ', Количество: ' . $quantities[$i] . ')';
            if ($i < count($names) - 1) {
                $orderDetails .= ', ';  // Добавляем запятую, если не последний товар
            }
        }

// Создание объекта заказа и сохранение в базу данных
        $order = new Order();
        $order->username = $user;
        $order->name = $orderDetails;
        $order->total_price = (float)str_replace(' RUB', '', $totalPrice);
        $order->address = $address;
        $order->save();



        session()->forget('cart');


        return redirect()->route('order');
    }
    public function show()
    {
        $user = auth()->user(); // Получаем текущего аутентифицированного пользователя

        $latestOrder = Order::where('username', $user->email)
            ->orderBy('id', 'desc')
            ->first();

        return view('order', ['latestOrder' => $latestOrder]);
    }
}
