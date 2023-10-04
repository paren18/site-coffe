@extends('head')
@section('main')
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
