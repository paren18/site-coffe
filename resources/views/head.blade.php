<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        body{
            padding: 0px;
            margin: 0px;

            display: flex;
            flex-direction: column;
            min-height: 100vh

        }


        .content {
            flex: 1;
        }

        .footer {
            background-color: white;
            text-align: center;
            font-size: 20px;
        }


        #navbar ul{
            display: none;
            background-color: orange;
            position: absolute;
            top: 100%;

        }
        #navbar li:hover ul { display: block; }
        #navbar, #navbar ul{
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        #navbar {
            width: 100%;
            height: 80px;
            background-color: black;
            min-width: 470px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        #navbar li {
            height: 100%;

        }

        #navbar li a {
            display: block;
            padding: 25px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            font-size: 22px;
            font-family: 'Segoe Print', sans-serif;
        }





        #navbar ul li { float: none; }
        #navbar li:hover { background-color: #f90; }
        #navbar ul li:hover { background-color: #666; }


    </style>

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

