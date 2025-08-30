@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/first-weight-register.css') }}">
@endsection

<header class="header">
    <h1 class="header__title">
        PiGLy
    </h1>
</header>

@section('content')
<div class="first-weight-form__content">
    <div class="first-weight-form__title">
        <h2>
            新規会員登録
        </h2>
    </div>

    <div class=“first-weight-form__subtitle”>
        <h3>
            STEP2 体重データの入力
        </h3>
    </div>

    <form class="first-weight-form" method="post" action="{{ route('register.step2.post')}}">
    @csrf
        <div class="first-weight-form__group">
            <div class="first-weight-form__group-title">
                <span class="first-weight-form__label--item">
                    現在の体重
                </span>
            </div>
            <div class="first-weight-form__group-content">
                <div class="first-weight-form__input--text">
                    <input type="number" name="current_weight"step="0.1" min="1" placeholder="現在の体重を入力" value="{{ old('current_weight')}}" />
                    kg
                </div>
                @error('current_weight')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="first-weight-form__group">
            <div class="register-form__group-title">
                <span class="first-weight-form__label--item">
                    目標の体重
                </span>
            </div>
            <div class="first-weight-form__group-content">
                <div class="first-weight-form__input--text">
                    <input type="number" name="target_weight" step="0.1" min="1" placeholder="目標の体重を入力" value="{{ old('target_weight')}}" />
                    kg
                </div>
                @error('target_weight')
                <div class="form__error">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>


        <div class="first-weight-form__button">
            <button class="first-weight-form__button-submit" type="submit">
                アカウント作成
            </button>
        </div>

    </form>

</div>
@endsection