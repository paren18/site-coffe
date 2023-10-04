@extends('head')
@section('main')
    <link rel="stylesheet" type="text/css" href="css/menu.css">

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
