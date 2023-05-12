@extends('layouts.layout')

@section('title')Главная@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque provident quo eaque quidem sequi. Adipisci aut deserunt eaque dolorem ipsa dolores quasi, vitae et ullam molestias nisi magnam mollitia eius?</p>
@endsection

@section('sideMenu')
    @parent
        <p>Что-то выводим</p>
@endsection
