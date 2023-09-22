@extends('head')
@section('main')
    <style>
        .first_menu{
            background-color: #282526;
        }
        .first_menu > h1{
            margin-top: 0px;
            padding-top: 1em;
            padding-left: 1.5em;
            color: #ff9900;
        }
        .second_menu{
            color: lightgray;
        }
        .second_menu > h1{
            margin-top: 0px;
            padding-top: 1em;
            padding-left: 1.5em;
            color: #ff9900;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 2em;
        }

        .card {
            flex-basis: calc(20% - 1em); /* 25% ширины контейнера с отступом 1em между карточками */
            margin-bottom: 1em;
            margin-left: 1.5em;
            margin-right: 1.5em;
            min-height: 350px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            border-radius: 4px;
            transition: 0.2s;
            position: relative;

        }


        /* При наведении на карточку - меняем цвет тени */
        .card:hover {
            box-shadow: 4px 8px 16px rgba(255, 102, 51, 0.2);
        }

        .card__top {
            flex: 0 0 220px; /* Задаем высоту 220px, запрещаем расширение и сужение по высоте */
            position: relative;
            overflow: hidden; /* Скрываем, что выходит за пределы */

        }

        /* Контейнер для картинки */
        .card__image {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .card__image > img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Встраиваем картинку в контейнер card__image */
            transition: 0.2s;
        }

        /* При наведении - увеличиваем картинку */
        .card__image:hover > img {
            transform: scale(1.1);
        }



        .card__bottom {
            display: flex;
            flex-direction: column;
            flex: 1 0 auto; /* Занимаем всю оставшуюся высоту карточки */
            padding: 10px;
            color: #ff9900 ;
        }

        .card__prices {

            text-align: center;
            font-size: 20px;
            margin-bottom: 10px;
        }



        .card__title {
            display: block;
            margin-bottom: 10px;
            font-weight: 400;
            font-size: 24px;
            line-height: 150%;
            text-align: center;
            color: #ff9900;
        }

        .card__title:hover {
            color: #ff6633;
        }

        .card__add {
            display: block;
            width: 100%;
            font-weight: 400;
            font-size: 17px;
            color: #ff9900 ;
            padding: 10px;
            text-align: center;
            border: 1px solid #70c05b;
            border-radius: 4px;
            cursor: pointer; /* Меняем курсор при наведении */
            transition: 0.2s;
            margin-top: auto; /* Прижимаем кнопку к низу карточки */
        }
        .alert{
            background-color: #70c05b;
            color: white;
            font-size: 24px;
            padding-left: 4em;
        }
        .alert-d{
            background-color: red;
            color: white;
            font-size: 24px;
            padding-left: 4em;
        }

        .card__add:hover {
            border: 1px solid #ff6633;
            background-color: #ff6633;
            color: #fff;
        }


    </style>

    <div >
        @if(session('danger'))
            <div class="alert-d">
                {{ session('danger') }}
            </div>
                @else
            <div class="alert">
                {{ session('success') }}
            </div>

    </div>
    @endif

<div class="first_menu" >

    <h1>Кофе</h1>
    <div class="card-container">
    @foreach($cofes as $el)
    <!-- Карточка товара -->
    <div class="card">
        <!-- Верхняя часть -->
        <div class="card__top">
            <a href="#" class="card__image">
                <img src="{{$el->photo_link}}"/>
            </a>

        </div>

        <div class="card__title">
             {{$el->name}}
        </div>
        <div class="card__bottom">
            <div class="card__prices">
                {{$el->price}} Руб
            </div>

            <form action="{{ route('addcofes', ['id' => $el->id]) }}" method="GET" >
                @csrf
                <input type="hidden" value="{{ $el->id }}" name="id">
                <input type="hidden" value="{{ $el->name }}" name="name">
                <input type="hidden" value="{{ $el->price }}" name="price">
                <input type="hidden" value="{{ $el->photo_link }}"  name="photo_link ">
                <input type="hidden" value="1" name="quantity">
                <button class="card__add"> В корзину</button>
            </form>
        </div>
    </div>
    @endforeach
    </div>
    </div>
    <div class="second_menu" >
        <h1>Дисерты</h1>
        <div class="card-container">
    @foreach($cakes as $elcake)
        <!-- Карточка товара торта -->
        <div class="card">
            <!-- Верхняя часть -->
            <div class="card__top">
                <a href="#" class="card__image">
                    <img src="{{$elcake->photo_link}}"/>
                </a>
            </div>

            <div class="card__title">
                {{$elcake->name}}
            </div>
            <div class="card__bottom">
                <div class="card__prices">
                    {{$elcake->price}} Руб
                </div>
                <form action="{{ route('addcake', ['id' => $elcake->id]) }}" method="GET" >
                    @csrf
                    <input type="hidden" value="{{ $elcake->id }}" name="id">
                    <input type="hidden" value="{{ $elcake->name }}" name="name">
                    <input type="hidden" value="{{ $elcake->price }}" name="price">
                    <input type="hidden" value="{{ $elcake->photo_link }}"  name="photo_link ">
                    <input type="hidden" value="1" name="quantity">
               <button class="card__add"> В корзину</button>
                </form>
            </div>
        </div>
        @endforeach
        </div>
        </div>
@endsection
