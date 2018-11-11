@extends('layouts.userTemplate')

@section('title', 'Главная страница')

@section('content')

<main role="main" class='pt-5'>
  <div class="container-fluid">
    <div class="row justify-content-center mb-4">
      <div class="d-block col-md-5">
        <h1 class='font-4 weight-900 mb-0 text-center'>Олимпиада </h1>
        <h1 class='font-4 weight-900 mb-0 text-center'>Морской старт</h1>
        <h4 class='font-1 weight-600 uppercase text-right pr-5 mb-4'>Реализуй свой потенциал</h4>
        <p class="font-14px">Севастополь – причерноморский регион с богатой историей. Развитие данного региона как центра водной промышленности имеет стратегическое значение для государства, одной из ступеней к утверждению лидерства Российской Федерации в мировом океане. В связи с этим крайне важно, чтобы молодое поколение имело прочные знания в данной области.</p>
        <p class="font-14px">Олимпиада для школьников «Морской старт» - прекрасная возможность для каждого реализовать свой потенциал!</p>
        <p class="font-14px">Олимпиада проводится по таким направлениям, как естественные науки (математика, физика, информатика), гуманитарные науки (история, обществознание, география), а так же техника и технологии (техника и технологии кораблестроения и водного транспорта). Задания каждого направления содержат вопросы, связанные с морской тематикой.</p>
      </div>
      <div class="ml-negative-4 col-3 mt-3">
        <img class="float-left" src="{{ asset('images/sev-monument.png') }}" alt=" "/> 
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="wave row my-0"></div>
    <div class="blue-background row d-block my-0 pt-5 pb-1">
      <div class="offset-2 col-7 text-right mb-3">
        <h1 class='font-light font-3 weight-800 mb-0'>Прими участие прямо сейчас </h1>
        <h4 class='font-light  font-1 weight-600 uppercase o-sans'>Пройди отборочный онлайн-тур</h4>
        <a href="#" class='font-light link normalcase'>Скачать положение (pdf)</a>
      </div>
      <div class="offset-3 col-6 text-center">
        <form class='mb-1' action='#' method="POST">
          <input class='btn btn-success o-sans uppercase px-4' type="submit" name="registrationButton" value="Регистрация"/>
        </form>
        <p class="font-light font-08 uppercase">
          Уже есть аккаунт? Тогда Вы можете
          <a href="#" class='underlined weight-600'>Войти</a>
        </p>
      </div>
    </div>
    <div class="wave-reverse row mt-0 mb-4"></div>
  </div>

  <div class="container-fluid">
    <div class='row pt-3 justify-content-center '>
      <h1 class='font-3 weight-800 mb-5'>Преимущества нашей олимпиады</h1>
      <div class='row text-center mb-4 mr-0 ' >
        <div class='col-2 offset-3 '>
          <img class='mb-2' src="{{ asset('images/icons/knowledge.png') }}" alt=" "/> 
          <p class="text-left font-14px">Ты получишь новые знания и навыки, необходимые в будущей профессии, а также возможность проявить свои научные познания!</p>
        </div>
        <div class='col-2 '>
          <img class='mb-2' src="{{ asset('images/icons/certificate.png') }}" alt=" "/> 
          <p class="text-left font-14px">Победители и призеры Олимпиады получат сертификат, дающий от 4 до 10 баллов к общему проходному баллу по направлениям подготовки СевГУ</p>
        </div>
        <div class='col-2 '>
          <img class='mb-2' src="{{ asset('images/icons/camera.png') }}" alt=" "/> 
          <p class="text-left font-14px">Для иногородних и иностранных участников - возможность побывать в городе-герое Севастополе и пройти по его увлекательным местам</p>
        </div>
        
      </div>
      <div class='row text-center mb-4 mr-0'>
        <div class='col-2 offset-3' >
          <img class='mb-2' src="{{ asset('images/icons/museum.png') }}" alt=" "/> 
          <p class="text-left font-14px">Для местных участников - посетить множество исторических мест, музеев и интереснейшие экскурсии!</p>
        </div>
        <div class='col-2'>
          <img class='mb-2' src="{{ asset('images/icons/microscope.png') }}" alt=" "/> 
          <p class="text-left font-14px">Для всех участников - посетить научно-исследовательские центры СевГУ, пообщаться с преподавателями и студентами </p>
        </div>
        <div class='col-2'>
          <img class='mb-2' src="{{ asset('images/icons/groupe.png') }}" alt=" "/> 
          <p class="text-left font-14px">Это отличная возможность познакомиться с новыми людьми, приобрести друзей из других школ, городов и даже стран!</p>
        </div>
      </div>
    </div>
  </div>
    
  </div>
</main>
  
@endsection