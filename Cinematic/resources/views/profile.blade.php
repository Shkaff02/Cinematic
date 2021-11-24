@extends('dashboard')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Профіль | Cinematic</title>
@endsection

@section('content')
    <div class="tickets">
        <div class="tickets-header">
            <div class="pers-info">
                <p class="name">Костя Шуригін</p>
                <!-- <h1 class="surname">Фамилия</h1> -->
            </div>
            <div class="buttons">
                <a href = "{{route('tickets')}}" class="bar">
                    <img src="{{asset('images/ticket.png')}}" alt="">
                    <p>Квитки</p>
                </a>
                <a href = "" class="profile">
                    <img src="{{asset('images/profile.png')}}" alt="">
                    <p>Профіль</p>
                </a>
            </div>
        </div>

        <div class="tickets-content">
            <div class="your-tickets">
                <div class="table">
                    <div class="table-header">
                        <h1>Контактна інформація</h1>
                        <p>З номером телефону ви зможете побачити всі свої замовлення.
                            Пошта потрібна для резервного доступу в кабінет.</p>
                    </div>

                    <div class="table-content">
                        <div class="field">
                            <div class="field-left">
                                <p>ваше місто:</p>
                                <p class="city">Одеса</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>мобільний телефон:</p>
                                <p class="city">0977954334</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>E-MAIL::</p>
                                <p class="city">gfark345@gmail.com</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="your-tickets">
                <div class="table">
                    <div class="table-header">
                        <h1>Персональна інформація</h1>
                        <p>Розкажи про себе!</p>
                    </div>

                    <div class="table-content">
                        <div class="field">
                            <div class="field-left">
                                <p>ім'я:</p>
                                <p class="city">Костя</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>прізвище:</p>
                                <p class="city">Шуригін</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>сімейний стан:</p>
                                <p class="city">не визначено</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>


                        <div class="field">
                            <div class="field-left">
                                <p>дата народження:</p>
                                <p class="city">17.01.2002</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>стать:</p>
                                <p class="city">Чоловік</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>

                        <div class="field">
                            <div class="field-left">
                                <p>улюблений жанр:</p>
                                <p class="city">трилер</p>
                            </div>

                            <div class="field-right">
                                <img src="{{asset('images/edit.png')}}" alt="" class="edit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
