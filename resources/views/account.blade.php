@extends('head')
@section('main')
    <link rel="stylesheet" type="text/css" href="css/account.css">
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
