@extends('head')

@section('main')
    <link rel="stylesheet" type="text/css" href="css/cart.css">
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
                @error('address')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        @endif
    </div>
@endsection
