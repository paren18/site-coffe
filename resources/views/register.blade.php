@extends('head')
@section('main')
    <style>
        html, body {
            height: 100%;
        }
        .first_register{
            background-color: #282526;
            margin: 0px;
            padding-top: 1em;
            height: 100%;

        }
        form {
            max-width: 320px;
            padding: 15px;
            margin: 20px auto;
            background-color: #fff;
        }

        .input {
            display: block;
            width: 94%;
            padding: 8px 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            font-family: inherit;
            font-size: 16px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 8px 10px;
            margin-top: 2em;

            border: 0;
            background-color: #ff9900;
            cursor: pointer;

            font-family: inherit;
            font-size: 16px;
            color: #fff;
        }

        .btn:hover {
            background-color: #ff9900;
        }

        .mistake{
            color: red;
            margin-bottom: 1em;
            font-size: 1em;
        }
    </style>
    <div class="first_register">

        <form class="form" action="{{ route('register') }}" method="post" novalidate>
            @csrf
            <input class="input" type="text" placeholder="Ваше имя" name="name">
            @error('name')
            <div class="mistake">{{ $message }}</div>
            @enderror

            <input class="input" type="email" placeholder="Ваш e-mail" name="email">
            @error('email')
            <div class="mistake">{{ $message }}</div>
            @enderror

            <input class="input" type="password" placeholder="Пароль" name="password">
            @error('password')
            <div class="mistake">{{ $message }}</div>
            @enderror

            <input class="input" type="password" placeholder="Пароль еще раз" name="password_confirmation">
            @error('password_confirmation')
            <div class="mistake">{{ $message }}</div>
            @enderror

            <button class="btn" type="submit">Регистрация</button>
        </form>

    </div>

@endsection
