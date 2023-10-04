@extends('head')
@section('main')
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <div class="order_first">
        @if($latestOrder)
            <p>Номер заказа: {{ $latestOrder->id }}</p>
            <p>Имя пользователя: {{ $latestOrder->username }}</p>
            <p>Информация о заказе: {{ $latestOrder->name }}</p>
            <p>Общая стоимость: {{ $latestOrder->total_price }} RUB</p>
            <p>Адрес доставки: {{ $latestOrder->address }}</p>
        @else
            <p>У пользователя нет заказов.</p>
        @endif
    </div>
@endsection
