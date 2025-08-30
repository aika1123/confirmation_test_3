@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/change-weight.css') }}">
@endsection

<header class="header">
    <h1 class="header__title">
        PiGLy
    </h1>

    <nav class="app__nav">
        <ul class="app__nav-ul">
            <li class="ul-li__setting">
                <a href="" class="li__setting">
                    目標設定
                </a>
            </li>
        </ul>
        <ul class="app__nav-ul">
            <li class="ul-li__logout">
                <a href="" class="li__logout">
                    ログアウト
                </a>
            </li>
        </ul>
    </nav>

</header>

@section('content')
<div class="chang-weight-form__content">
    <div class="register-form__title">
        <h2>
            目標体重設定
        </h2>
    </div>

    <form class="register-form">
        <div class="first-weight-form__group">
            <div class="change-weight-form__group-content">
                <div class="change-weight-form__input--text">
                    <input type="number" name="weight" step="0.1" min="1" /> kg
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit" name="action" value="submit">
                更新
            </button>
            <button class="form__button-back" type="button" name="action" value="back">
                戻る
            </button>
        </div>
    </form>
</div>
@endsection
