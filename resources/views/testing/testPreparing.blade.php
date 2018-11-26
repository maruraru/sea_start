@extends('layouts.app')

@section('title', 'Начать прохождение теста')

@section('content')

    <p>Блок дисциплин {{$block->name}}.</p>
    <p>Предметы в блоке:</p>
    @foreach($subjects as $subject)
        <p class='mb-1'> {{$subject->name}} </p>
    @endforeach
    <p></p>
    <p>Бла-бла, текст с информацией</p>
    <p>Вы уверены, что хотите приступить к выполнению заданий? Отменить это действие будет невозможно</p>
    <p>
        <a href='/test/{{$block->id}}'>Начать</a>
    </p>
@endsection