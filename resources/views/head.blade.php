<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/head.css">

</head>

<body>


<ul id="navbar">
    <li><a href="{{ route('home') }}">Главная</a></li>
    <li><a href="{{ route('onas') }}">О нас</a></li>
    <li><a href="{{ route('menu') }}">Меню</a></li>
    <li><a href="{{ route('cart') }}">Корзина</a></li>

    @guest
    <li ><a href="{{ route('register') }}">Регистрация</a></li>
    <li ><a href="{{ route('login') }}">Авторизация</a></li>
    @else
    <li ><a href="{{ route('account') }}">Личный кабинет</a></li>
    @endguest

</ul>

<div class="content">
@yield('main')
</div>
<div class="footer">
@include('footer')
</div>
</body>
</html>

