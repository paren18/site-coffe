@extends('head')
@section('main')
    <style>
        html, body {
            height: 100%;
            background-color: #282526;
        }
        .account_frame{

            color: white;
            text-align: center;
            font-size: 1.5em;

        }
        .account_frame div{
            margin-bottom: 1em;
        }
        .account_frame button{
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: 0;
            font-size: 1em;
            cursor: pointer;
        }
        .account_frame button:hover{
            background-color: green;
        }

    </style>
    <div class="account_frame">
        <h1>Аккаунт</h1>
        <img src="{{ asset('images/avatars/avatar-' . auth()->id() . '.svg') }}" width="100" alt="Аватар">

        <div>Имя: {{$name}}</div>
        <div>Email: {{ $email }}</div>
        <form action="{{route('logout')}}">
            <button>Выход</button>
        </form>
    </div>
@endsection
