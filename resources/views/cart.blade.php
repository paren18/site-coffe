@extends('head')

@section('main')
    <style>
        html, body {
            height: 100%;
        }
        .cart_frame {
            background-color: #636b6f;
            padding-top: 1em;
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .tab {
            width: 100%;
            padding: 2em;
            margin: 0;
        }

        .tab th, .tab td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            background-color: #f90;
            font-size: 1.5em;
        }
        .tab th {
            background-color: #282526;
            color: white;

        }

        .tab td.item-total {
            font-weight: bold;
        }

        .tab td#totalPrice {
            font-weight: bold;
            text-align: right;
        }
        .order{

            font-size: 1.5em;
            color: white;
            margin-left: 86%;


        }


        .order button {
            display: block;
            width: 90%;
            padding: 8px 10px;
            border: 0;
            background-color: #ff9900;
            cursor: pointer;
            font-family: inherit;
            font-size: 1em;
            color: #fff;
        }

        .order button:hover {
            background-color: green;
        }
        .address{
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 8px;
            padding: 2em;
        }
    </style>
    <div class="cart_frame">
        <table class="tab">
            <thead>
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th></th>
                <th>Общая сумма</th>
            </tr>
            </thead>
            <tbody>
            @php
                $totalPrice = 0;
            @endphp

            @if (session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php
                        $itemTotal = $details['price'] * $details['quantity'];
                        $totalPrice += $itemTotal;
                    @endphp

                    <tr rowId="{{ $id }}">
                        <td>{{ $details['name'] }}</td>
                        <td class="price">{{ $details['price'] }} RUB</td>
                        <td>
                            <div class="quantity">{{ $details['quantity'] }}</div>
                        </td>
                        <td>
                            <form action="{{ route('cartdelite', ['id' => $id]) }}" method="GET">
                                @csrf
                                <button type="submit">
                                    <img src="images/иконки/Корзина.svg" alt="Корзина" width="16" height="16">
                                    Удалить
                                </button>
                            </form>
                        </td>

                        <td class="item-total">{{ $itemTotal }} RUB</td>
                    </tr>
                @endforeach
            @endif

            <tr>
                <td colspan="3">Общая сумма</td>
                <td id="totalPrice" colspan="2">{{ $totalPrice }} RUB</td>
            </tr>
            </tbody>
        </table>
        @if (session('cart'))
            <div class="order">
                <form action="{{ route('order') }}" method="POST">
                    @csrf
                    @foreach(session('cart') as $id => $details)
                        <input type="hidden" name="names[]" value="{{ $details['name'] }}">
                        <input type="hidden" name="prices[]" value="{{ $details['price'] }}">
                        <input type="hidden" name="quantities[]" value="{{ $details['quantity'] }}">
                    @endforeach
                    <input type="hidden" name="itemTotal" value="{{ $itemTotal }} RUB">
                    <input type="hidden" name="totalPrice" value="{{ $totalPrice }} RUB">
                    <input type="text" class="address" name="address" placeholder="Введите адрес доставки">

                    <button type="submit">Заказать</button>
                </form>
            </div>
        @endif
    </div>
@endsection
