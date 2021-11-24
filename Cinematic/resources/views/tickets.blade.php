@extends('dashboard')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/tickets.css') }}">
    <title>Квитки | Cinematic</title>
@endsection

@section('content')
    <div class="tickets">
        <div class="tickets-header">
            <div class="pers-info">
                <p class="name">Костя Шуригін</p>
                <!-- <h1 class="surname">Фамилия</h1> -->
            </div>
            <div class="buttons">
                <a href="" class="bar">
                    <img src="{{asset('images/ticket.png')}}" alt="">
                    <p>Квитки</p>
                </a>
                <a href="{{route('profile')}}" class="profile">
                    <img src="{{asset('images/profile.png')}}" alt="">
                    <p>Профіль</p>
                </a>
            </div>
        </div>

        <div class="tickets-content">
            <div class="your-tickets">
                <h1>Ваші квитки</h1>
                <div class="table">
                    <div class="cols">
                        <p>Дата операції</p>
                        <p>Фільм</p>
                        <p>Дата сеансу</p>
                        <p>Квитки</p>
                        <p>Бар</p>
                        <p>Вартість</p>
                        <p>Деталі</p>
                    </div>
                    <div class="record" id="1">
                        <p>22.09.21, 19:21</p>
                        <p>Дюна</p>
                        <p>05.10.21, 21:00</p>
                        <p>3</p>
                        <p>0</p>
                        <p>270грн</p>
                        <div class="image-holder" onclick="ticketDetails(1, '1ar', 'inf1')">
                            <img src="{{asset('images/down.png')}}" alt="" id="1ar" >
                        </div>
                    </div>

                    <div class="record more-info" id="inf1">
                        <p>№ замовлення: 139173</p>
                        <p>Квитки:

                            Ряд 6, місце 12

                            Ряд 6, місце 11</p>
                    </div>

                </div>
            </div>

            <div class="your-tickets block-height">
                <h1>Нещодавні операції</h1>
                <div class="table">
                    <div class="cols">
                        <p>Дата операції</p>
                        <p>Фільм</p>
                        <p>Дата сеансу</p>
                        <p>Квитки</p>
                        <p>Бар</p>
                        <p>Вартість</p>
                        <p>Деталі</p>
                    </div>
                    <div class="record" id="2">
                        <p>22.09.21, 19:21</p>
                        <p>Дюна</p>
                        <p>05.10.21, 21:00</p>
                        <p>3</p>
                        <p>0</p>
                        <p>270грн</p>
                        <div class="image-holder" onclick="ticketDetails(2, '2ar', 'inf2')">
                            <img src="{{asset('images/down.png')}}" alt="" id="2ar">
                        </div>
                    </div>

                    <div class="record more-info" id="inf2">
                        <p>№ замовлення: 139173</p>
                        <p>Квитки:

                            Ряд 6, місце 12

                            Ряд 6, місце 11</p>
                    </div>
                    <div class="record" id="3">
                        <p>22.09.21, 19:21</p>
                        <p>Дюна</p>
                        <p>05.10.21, 21:00</p>
                        <p>3</p>
                        <p>0</p>
                        <p>270грн</p>
                        <div class="image-holder" onclick="ticketDetails(3, '3ar', 'inf3')">
                            <img src="{{asset('images/down.png')}}" alt="" id="3ar">
                        </div>
                    </div>

                    <div class="record more-info" id="inf3">
                        <p>№ замовлення: 139173</p>
                        <p>Квитки:

                            Ряд 6, місце 12

                            Ряд 6, місце 11</p>
                    </div>
                    <div class="record" id="4">
                        <p>22.09.21, 19:21</p>
                        <p>Дюна</p>
                        <p>05.10.21, 21:00</p>
                        <p>3</p>
                        <p>0</p>
                        <p>270грн</p>
                        <div class="image-holder" onclick="ticketDetails(4, '4ar', 'inf4')">
                            <img src="{{asset('images/down.png')}}" alt="" id="4ar">
                        </div>

                    </div>
                    <div class="record more-info" id="inf4">
                        <p>№ замовлення: 139173</p>
                        <p>Квитки:

                            Ряд 6, місце 12

                            Ряд 6, місце 11</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/tickets.js') }}"></script>
@endsection
