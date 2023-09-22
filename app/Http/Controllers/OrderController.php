<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $names = $_POST['names'];
        $prices = $_POST['prices'];
        $quantities = $_POST['quantities'];
        $itemTotal = $_POST['itemTotal'];
        $totalPrice = $_POST['totalPrice'];

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
        $order->name = $orderDetails;
        $order->item_total = (float)str_replace(' RUB', '', $itemTotal);
        $order->total_price = (float)str_replace(' RUB', '', $totalPrice);
        $order->save();

// Перенаправление на главную страницу
        return redirect()->route('home');
    }
}
