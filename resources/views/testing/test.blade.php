@extends('layouts.app')

@section('title', 'Прохождение теста')

@section('content')

    <p>Блок дисциплин {{$block->name}}.</p>
    <form method="POST" action="{{ route('submitTest') }}">
        @foreach($subjects as $subject)
            <p class='mb-1'> {{$subject->name}} </p>
            @foreach($questions as $question)
                @if($question->subject_id === $subject->id)
                    <p class='mb-1'> <?= htmlspecialchars_decode($question->body)?> </p>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input id="question{{$question->id}}" type="text" class="form-control" name="question{{$question->id}}">
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <p>После отправки ответов изменить их будет невозможно!</p>
        <p>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </p>
    </form>
@endsection