@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <main>
        <div class='container'>
            <div class='row mt-5'>
                <div class='col-10 offset-1 div-container b-shadow-05 mb-5 py-5 px-4'>
                    <div class='row'>
                        <div class='ligth-backgroud of-x-hidden b-shadow-03 h-50 col-4 py-2 rounded'>
                            <div class ='row d-flex justify-content-end align-items-end mx-0 mb-3 px-0 py-1'>
                                <img class="icon-14 mr-1 " src="{{ asset('images/icons/user-pArea.png') }} " alt=" " />
                                <h5 class='uppercase font-14px weight-600 m-0'>
                                    {{Auth::user()->second_name.' '.Auth::user()->first_name.' '.Auth::user()->last_name}}
                                </h5>
                            </div>
                            <div class ='row d-flex justify-content-end align-items-end mx-0 mb-3 p-0'>
                                <h5 class='uppercase font-14px weight-600 m-0'>{{Auth::user()->phone}}</h5>
                            </div>
                            <div class ='row d-block text-right mx-0 mb-2 p-0'>
                                <p class='font-14px weight-400 m-0'>{{Auth::user()->city}}</p>
                                <p class='font-14px weight-400 m-0'>{{Auth::user()->school}}</p>
                                <p class='font-14px weight-400'>Класс {{Auth::user()->class}}</p>
                            </div>
                            <div class ='row d-block text-right mx-0 mb-4 p-0'>
                                <form action='#' method="POST">
                                    <button type="submit" class="btn btn-success o-sans font-1 uppercase px-4" name='editAccount'>
                                        Редактировать
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class='ligth-backgroud b-shadow-03 col-7 offset-1 pl-4 rounded'>
                            <div class='row text-left pt-3 mb-2 pl-3'>
                                <h2 class='font-dark font-2 weight-800'>Выберите направление</h2>
                            </div>
                            <div class='row d-flex pt-3 mb-1'>
                                <div class='col-5 d-block'>
                                    <div class='d-flex justify-content-center mb-2'>
                                        <img src="{{ asset('images/icons/natural_science.png') }}" alt=" "/>
                                    </div>
                                    <h2 class='font-dark font-1 weight-800 text-center'>Естественные науки</h2>
                                    <p class='mb-1'><a href="#" class='link link-dark'>Математика</a></p>
                                    <p class='mb-1'><a href="#" class='link link-dark'>Физика</a></p>
                                    <p><a href="#" class='link link-dark'>Информатика</a></p>
                                </div>
                                <div class='col-5 offset-1 '>
                                    <div class='d-flex justify-content-center mb-2'>
                                        <img src="{{ asset('images/icons/humanitarian_science.png') }}" alt=" "/>
                                    </div>
                                    <h2 class='font-dark font-1 weight-800 text-center'>Гуманитарные науки</h2>
                                    <p class='mb-1'><a href="#" class='link link-dark'>История</a></p>
                                    <p class='mb-1'><a href="#" class='link link-dark'>Обществознание</a></p>
                                    <p><a href="#" class='link link-dark'>География</a></p>
                                </div>
                            </div>
                            <div class='row d-flex pt-3 mb-2'>
                                <div class='col-5 d-block'>
                                    <div class='d-flex justify-content-center mb-2'>
                                        <img src="{{ asset('images/icons/technics.png') }}" alt=" "/>
                                    </div>
                                    <h2 class='font-dark font-1 weight-800 text-center'>Техника и технологии</h2>
                                    <p>
                                        <a href="#" class='link link-dark'>Техника и технологии кораблестроения и водного транспорта</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
