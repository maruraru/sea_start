@extends('layouts.userTemplate')

@section('title', 'Регистрация')

@section('content')

<main>
  <div class='container'>
    <div class="row my-0 mb-negative-3 mt-5">
      <div class="col-6 offset-3 wave-2 z-indexed-3">
      </div>
    </div>
    <div class='row'>
      <div class='col-6 offset-3 form-container b-shadow-05 mb-5 py-5'>
        <div class="col-7">
          <h3 class='font-2 oswald weight-700 text-left mb-4'>Регистрация</h3>
        </div>
        <form action="#" method="POST">
          <div class="form-group col-7 required">
            <label class="control-label {{ $errors->has('email') ? 'text-danger' : '' }}" for="name">Имя</label>
            @if ( !$errors->has('name') )
              <small class="text-danger">
                {{ $errors->first('name') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name"      value="{{ old('name') }}">
          </div>
          <div class="form-group col-7 required">
            <label class="control-label {{ $errors->has('surname') ? 'text-danger' : '' }}" for="surname">
              Фамилия
            </label>
            @if ( $errors->has('surname') )
              <small class="text-danger">
                {{ $errors->first('surname') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" id="surname" value="{{ old('surname') }}">
          </div>
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('patronymic') ? 'text-danger' : '' }}" for="patronymic">
              Отчество
            </label>
            @if ( $errors->has('patronymic') )
              <small class="text-danger">
                {{ $errors->first('patronymic') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('patronymic') ? 'is-invalid' : '' }}" id="patronymic"  value="{{ old('patronymic') }}">
          </div>
          
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('email') ? 'text-danger' : '' }}" for="email">
              Email
            </label>
            @if ( $errors->has('email') )
              <small class="text-danger">
                {{ $errors->first('email') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" value="{{ old('email') }}">
          </div>
          
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('phone') ? 'text-danger' : '' }}" for="phone">
              Телефон
            </label>
            @if ( $errors->has('phone') )
              <small class="text-danger">
                {{ $errors->first('phone') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" value="{{ old('phone') }}">
          </div>
          
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('city') ? 'text-danger' : '' }}" for="city">
              Город
            </label>
            @if ( $errors->has('city') )
              <small class="text-danger">
                {{ $errors->first('city') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="city" value="{{ old('city') }}">
          </div>
          
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('school') ? 'text-danger' : '' }}" for="school">
              Школа
            </label>
             @if ( $errors->has('school') )
              <small class="text-danger">
                {{ $errors->first('school') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('school') ? 'is-invalid' : '' }}" id="school" value="{{ old('school') }}">
          </div>
         
          <div class="form-group col-7 required" >
            <label class="control-label {{ $errors->has('class') ? 'text-danger' : '' }}" for="class">
              Класс
            </label>
            @if ( $errors->has('class') )
              <small class="text-danger">
                {{ $errors->first('class') }}
              </small> 
            @endif
            <input type="text" class="form-control {{ $errors->has('class') ? 'is-invalid' : '' }}" id="class" value="{{ old('class') }}">
          </div>
          
          <div class="col-7">
            <button type="submit" class="btn btn-success o-sans uppercase px-4" name='confirmRegistration'>Зарегистрироваться</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</main>

@endsection
