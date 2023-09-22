@extends('head')
@section('main')
    <h1>Аккаунт</h1>
    <form action="{{route('logout')}}">
    <button>Выход</button>
    </form>
@endsection
