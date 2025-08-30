@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

<header class="header">
    <h1 class="header__title">
        PiGLy
    </h1>
</header>

@section('content')

<div class="register-form__content">
    <div class="register-form__title">
        <h2>
            新規会員登録
        </h2>
    </div>

    <div class=“register-form__subtitle”>
        <h3>
            STEP1 アカウント情報の登録
        </h3>
    </div>

    <form class="register-form" action="{{ route('register.step1.post') }}" method="post">
    @csrf
        <div class="register-form__group">
            <div class="register-form__group-title">
                <span class="register-form__label--item">
                    お名前
                </span>
            </div>
            <div class="register-form__group-content">
                <div class="register-form__input--text">
                    <input type="text" name="name" placeholder="名前を入力" value="{{ old('name')}}"/>
                </div>
                @error('name')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="register-form__group">
            <div class="register-form__group-title">
                <span class="register-form__label--item">
                    メールアドレス
                </span>
            </div>
            <div class="register-form__group-content">
                <div class="register-form__input--text">
                    <input type="email" name="email" placeholder="メールアドレスを入力" value="{{ old('email')}}" />
                </div>
                @error('email')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="register-form__group">
            <div class="register-form__group-title">
                <span class="register-form__label--item">
                    パスワード
                </span>
            </div>
            <div class="register-form__group-content">
                <div class="register-form__input--text">
                    <input type="text" name="password" placeholder="パスワードを入力" value="{{ old('password')}}" />
                </div>
                @error('password')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="register-form__button">
            <button class="register-form__button-submit" type="submit">
                次に進む
            </button>
        </div>

        <div class=register-form__link>
            <a class=register-form__link-login href="/login">
                ログインはこちら
            </a>
        </div>

    </form>

</div>
@endsection