@extends('dashboard')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Вхід | Cinematic</title>
@endsection

@section('content')
    <div class="login">
        <div class="login-header">
            <h1>Вхід до особистого кабінету</h1>
            <p>Тут всі ваші замовлення та особиста інформація</p>
        </div>
        <form action="{{ route('login.custom') }}" method="POST">
            @csrf
            <div class="login-content">
                <input id="lgn" type="text" class="login-form" placeholder="email" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

                <input id="pswrd" type="password" class="password-form" placeholder="пароль" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="login-footer">
                <button type="submit" class="btn-sub">Увійти</button>

                <div class="btn-reg">
                    <a href="{{route('registration')}}">Реєстрація</a>
                </div>
            </div>
        </form>
    </div>
@endsection
