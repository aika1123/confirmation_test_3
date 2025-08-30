@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
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
<div class="detail-form__content">
    <div class="detail-form__title">
        <h2>
            Weight Log
        </h2>
    </div>

    <form class="detail-form">

        <div class="detail-form__group">
            <div class="detail-form__group-title">
                <span class="detail-form__label--item">
                    日付
                </span>
            </div>
            <div class="detail-form__group-content">
                <div class="date-select">
                    <select name="year" class="date-select__year">
                    @for ($i = 2020; $i <= 2030; $i++)
                        <option value="{{ $i }}">{{ $i }}年</option>
                    @endfor
                    </select>

                    <select name="month" class="date-select__month">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}月</option>
                    @endfor
                    </select>

                    <select name="day" class="date-select__day">
                    @for ($i = 1; $i <= 31; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}日</option>
                    @endfor
                    </select>
                </div>
                <input type="hidden" name="date" id="date" placeholder="年/月/日">
                <script>
                    function combineDate() {
                    const y = document.getElementById('year').value;
                    const m = document.getElementById('month').value.padStart(2, '0');
                    const d = document.getElementById('day').value.padStart(2, '0');
                    document.getElementById('date').value = `${y}-${m}-${d}`;
                    }
                </script>

                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <div class="detail-form__group">
            <div class="detail-form__group-title">
                <span class="detail-form__label--item">
                    体重
                </span>
            </div>
            <div class="detail-form__group-content">
                <div class="detail-form__input--text">
                    <input type="number" name="weight" step=0.1 min="1" placeholder="50.0" /> kg
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <div class="detail-form__group">
            <div class="detail-form__group-title">
                <span class="detail-form__label--item">
                    摂取カロリー
                </span>
            </div>
            <div class="detail-form__group-content">
                <div class="detail-form__input--text">
                    <input type="number" name="calorie" min="0" placeholder="1200" /> cal
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <div class="detail-form__group">
            <div class="detail-form__group-title">
                <span class="detail-form__label--item">
                    運動時間
                </span>
            </div>
            <div class="detail-form__group-content">
                <div class="detail-form__input--text">
                    <input type="text" name="calorie" min="0" placeholder="00:00" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <div class="detail-form__group">
            <div class="detail-form__group-title">
                <span class="detail-form__label--item">
                    運動内容
                </span>
            </div>
            <div class="detail-form__group-content">
                <div class="detail-form__input--textarea">
                    <textarea name="detail" placeholder="運動内容を追加"></textarea>
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
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