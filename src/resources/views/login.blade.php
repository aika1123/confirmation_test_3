@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<header class="header">
    <h1 class="header__title">
        PiGLy
    </h1>
</header>

@section('content')
<div class="login-form__content">
    <div class="login-form__title">
        <h2>
            ログイン
        </h2>
    </div>

    <form class="login-form" method="post" action="{{ route('login')}}">
    @csrf
        <div class="login-form__group">
            <div class="login-form__group-title">
                <span class="login-form__label--item">
                    メールアドレス
                </span>
            </div>
            <div class="login-form__group-content">
                <div class="login-form__input--text">
                    <input type="email" name="email" placeholder="メールアドレスを入力" />
                </div>
                @error('email')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="login-form__group">
            <div class="login-form__group-title">
                <span class="login-form__label--item">
                    パスワード
                </span>
            </div>
            <div class="login-form__group-content">
                <div class="login-form__input--text">
                    <input type="text" name="password" placeholder="パスワードを入力" />
                </div>
                @error('password')
                <div class="form__error">
                    {{'$message'}}
                </div>
                @enderror
            </div>
        </div>

        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">
                ログイン
            </button>
        </div>

        <div class=login-form__link>
            <a class=login-form__link-register href="/register/step1">
                アカウント作成はこちらから
            </a>
        </div>

    </form>

</div>
@endsection