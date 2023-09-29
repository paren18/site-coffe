@extends('head')
@section('main')
    <style>
        html body{
            background-color: #636b6f;
        }
        .order_first{

            background-color: #ff9900;
            color: white;
            text-align: center;
            font-size: 1.5em;
        }
        .order_first h2{
            padding: 1em;
            margin: 0px;
        }
    </style>
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
