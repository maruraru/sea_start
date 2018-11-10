@extends('layouts.userTemplate')

@section('title', 'Вход')

@section('content')

<main>
  <div class='container'>
    <div class="row my-0 mb-negative-2 mt-5">
      <div class="col-6 offset-3 wave-2 z-indexed-3">
      </div>
    </div>
    <div class='row'>
      <div class='col-6 offset-3 form-container light-blue-background mb-5 py-5'>
        <div class="col-7">
          <h3 class='font-2 oswald weight-700 text-left mb-4'>Вход</h3>
        </div>
        <form action="#" method="POST">
          @if($errors->any())
            <div class="col-7">
              <small class="text-danger">
                Неверный Email или пароль
              </small> 
            </div>
          @endif
          <div class="form-group col-7">
            <label class="control-label" for="email" >
              Email
            </label>
            <input type="text" class="form-control" id="email" value="{{ old('email') }}">
          </div>
          <div class="form-group col-7">
            <label class='control-label' for="password">
              Пароль
            </label>
            <input type="text" class="form-control" id="password">
          </div>
          <div class="col-7">
            <button type="submit" class="btn btn-success o-sans uppercase px-4" name='confirmRegistration'>
              Войти
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</main>

@endsection
