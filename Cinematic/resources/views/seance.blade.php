@extends('dashboard')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/seance.css') }}">

    <title>{{$seance -> film_name}} - Вибір місця | Cinematic</title>
@endsection

@section('pageTitle')
    <div class="text"><p>Сеанс</p></div>
@endsection

@section('content')
    <p id="film-path">Місця > Оплата > Замовлення</p>

    <p id="film-name">{{$seance -> film_name}}</p>
    <img src="{{asset('images/'.$seance -> film_id.'poster.jpg')}}" alt="poster" id="poster" width="275px" height="406px">
    <table class="ticket-info">
        <tr>
            <td><img src="{{asset('images/ticket-place.png')}}" alt=""></td>
            <td>{{$currentCinema -> city}}, {{$currentCinema -> cinema_name}} {{$seance -> hall_name}}</td>
        </tr>
        <tr>
            <td><img src="{{asset('images/ticket-day.png')}}" alt=""></td>
            <td>{{Carbon\Carbon::parse($seance -> seance_date)->isoFormat('D.M.Y dddd')}}</td>
        </tr>
        <tr>
            <td><img src="{{asset('images/ticket-time.png')}}" alt=""></td>
            <td>Час {{Carbon\Carbon::parse($seance -> time_start)->format('G:i')}} - {{Carbon\Carbon::parse($seance -> time_end)->format('G:i')}}</td>
        </tr>
    </table>
    <svg width="576" height="43" viewBox="0 0 576 43" fill="none" xmlns="http://www.w3.org/2000/svg" class="ekran-svg">
        <path d="M266.214 36.038V38H256.764V25.4H265.962V27.362H259.104V30.638H265.188V32.564H259.104V36.038H266.214ZM273.467 32.69H271.127V38H268.823V25.4H271.127V30.674H273.539L277.157 25.4H279.641L275.339 31.502L279.803 38H277.157L273.467 32.69ZM286.575 25.4C287.667 25.4 288.615 25.58 289.419 25.94C290.235 26.3 290.859 26.816 291.291 27.488C291.723 28.16 291.939 28.958 291.939 29.882C291.939 30.794 291.723 31.592 291.291 32.276C290.859 32.948 290.235 33.464 289.419 33.824C288.615 34.184 287.667 34.364 286.575 34.364H283.731V38H281.391V25.4H286.575ZM286.467 32.384C287.487 32.384 288.261 32.168 288.789 31.736C289.317 31.304 289.581 30.686 289.581 29.882C289.581 29.078 289.317 28.46 288.789 28.028C288.261 27.596 287.487 27.38 286.467 27.38H283.731V32.384H286.467ZM301.872 35.084H295.572L294.33 38H291.918L297.588 25.4H299.892L305.58 38H303.132L301.872 35.084ZM301.098 33.248L298.722 27.74L296.364 33.248H301.098ZM318.708 25.4V38H316.368V32.6H309.852V38H307.512V25.4H309.852V30.602H316.368V25.4H318.708Z" fill="white"/>
        <path d="M1 13C54.7817 9.33333 187.941 2 290.323 2C392.705 2 522.767 9.33333 575 13" stroke="white" stroke-width="3.5"/>
    </svg>

    @if(count($tickets) != 0)
    <table class="place-choose">
        <?php /* */$count = 0;/* */ ?>
        @for($i = 0; $i < $seance -> rows; $i++)
            <tr>
                @for($j = 0; $j < $seance -> columns; $j++)
                    @if($tickets[$count] -> status == 0)
                        <td class="place-box" data-toggle="tooltip" title="Ряд: {{$i + 1}}, Місце: {{$j + 1}}<br/>Ціна: {{$tickets[$count] -> price}} грн" data-row="{{$i + 1}}" data-column="{{$j + 1}}" data-price="{{$tickets[$count] -> price}}"></td>
                    @endif
                    @if($tickets[$count] -> status == 1)
                        <td class="grey" data-toggle="tooltip" title="Це місце зайнято" data-row="{{$i + 1}}" data-column="{{$j + 1}}"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>
                    @endif
                    <?php /* */$count++;/* */ ?>
                @endfor
            </tr>
        @endfor
{{--        <tr>--}}
{{--            <td></td><TD></TD><td></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="6"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="1" start="7"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="1" start="12"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="6"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="2" start="7"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="9"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="2" start="10"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="12"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="13"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="14"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="15"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="2" start="16"></td>--}}
{{--        </tr>--}}
{{--        <tr style="padding-left: 5px;">--}}

{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="12"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="13"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="14"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="15"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="16"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="17"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="3" start="18"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="11"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="4" start="12"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="13"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="14"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="4" start="15"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="16"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="17"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="4" start="18"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="12"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="13"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="14"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="15"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="16"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="17"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="5" start="18"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="11"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="6" start="12"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="6" start="13"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="grey" data-toggle="tooltip" title="Місце зайняте" id="6" start="14"><img src="{{asset('images/td-cross.png')}}" alt="" class="td-cross"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="15"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="16"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="17"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="6" start="18"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td></td><TD></TD><td></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="7" start="12"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td></td><TD></TD><td></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="8" start="12"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="1"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="2"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="3"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="4"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="5"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="6"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="7"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="8"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="9"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="10"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="11"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="12"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="13"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="14"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="15"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="16"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="17"></td>--}}
{{--            <td class="place-box" data-toggle="tooltip" title="90 грн." id="9" start="18"></td>--}}
{{--        </tr>--}}
    </table>
    @endif


    <div class="chosen-tickets">
        <!-- <p class="text-center online-text">З онлайн квитком одразу в зал! <br> Друкувати не потрібно! </p> -->
        <p class="online-text">Квитки</p>
        <div class="here">

        </div>
        <!-- <div class="place-pay">
            <p class="row">1 ряд</p>
            <p class="place">7 місце</p>
            <p class="place-price">90 грн</p>
            <img src="../img/ticket-cross.png" alt="close" class="ticket-cross">
        </div> -->
        <p class="pay">Всього до сплати</p>
        <p class="pay-sum">0 грн</p>
        <a href="#" class="continue">Продовжити</a>
    </div>
@endsection

@section('inner-list')
    <a href="{{route('home')}}">Зараз у кіно</a>
    <a href="{{route('soon')}}">Скоро у прокаті</a>
    <a href="{{route('cinemas')}}">Кінотеатри</a>
    <a href="{{route('faq')}}">Допомога</a>
    <a href="{{route('about')}}">Про компанію</a>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/seance.js') }}"></script>
@endsection
