@extends('head')
@section('main')
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <div class="first_register">

        <form class="form" action="{{ route('login') }}" method="post" >
            @csrf
            <input class="input" type="email" placeholder="Ваш e-mail" name="email">

            <input class="input" type="password" placeholder="Пароль" name="password">
            @error('email')
            <div class="mistake">{{ $message }}</div>
            @enderror
            <button class="btn" type="submit">Авторизация</button>

        </form>

    </div>

@endsection
