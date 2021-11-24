@extends('dashboard')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <title>Реєстрація | Cinematic</title>
@endsection

@section('content')
    <div class="login">
        <div class="login-header">
            <h1>Реєструйся у клубі Cinematic!</h1>
            <p>Квиток до дня народження, бонуси за покупки,
                персональні знижки </p>
        </div>
        <form action="{{ route('registration.custom') }}" method="POST">
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
                <button type="submit" class="btn-sub">Реєстрація</button>

                <div class="btn-reg">
                    <a href="{{route('login')}}">Увійти</a>
                </div>
            </div>
        </form>
    </div>
@endsection
