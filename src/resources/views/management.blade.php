@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css') }}">
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
<div class="management__content">
    <div class="summary__item">
        <p class="summary__label">
            目標体重
        </p>
        <p class="summary__value">
            <span class="summary__unit">
                kg
            </span>
        </p>
    </div>
    <div class="summary__item">
        <p class="summary__label">
            目標まで
        </p>
        <p class="summary__value">
            <span class="summary__unit">
                kg
            </span>
        </p>
    </div>
    <div class="summary__item">
        <p class="summary__label">
            現在の体重
        </p>
        <p class="summary__value">
            <span class="summary__unit">
                kg
            </span>
        </p>
    </div>
    <form class="search-form">
        <div class="search-form__content">
            <div class="search-form__first-date">
                <select name="year" class="date-select__year">
                @for ($i = 2020; $i <= 2030; $i++)
                    <option value="{{ $i }}">{{ $i }}
                        年
                    </option>
                @endfor
                </select>

                <select name="month" class="date-select__month">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}
                            月
                        </option>
                    @endfor
                </select>

                <select name="day" class="date-select__day">
                    @for ($i = 1; $i <= 31; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}
                            日
                        </option>
                    @endfor
                </select>
                <input type="hidden" name="date" id="date" placeholder="年/月/日">
                    <script>
                        function combineDate() {
                        const y = document.getElementById('year').value;
                        const m = document.getElementById('month').value.padStart(2, '0');
                        const d = document.getElementById('day').value.padStart(2, '0');
                        document.getElementById('date').value = `${y}-${m}-${d}`;
                        }
                    </script>
            </div>

            <span class="search-form__divider">
                ~
            </span>

            <div class="search-form__last-date">
                <select name="year" class="date-select__year">
                    @for ($i = 2020; $i <= 2030; $i++)
                        <option value="{{ $i }}">{{ $i }}
                            年
                        </option>
                    @endfor
                </select>

                <select name="month" class="date-select__month">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}
                            月
                        </option>
                    @endfor
                </select>

                <select name="day" class="date-select__day">
                    @for ($i = 1; $i <= 31; $i++)
                        <option value="{{ sprintf('%02d', $i) }}">{{ $i }}
                            日
                        </option>
                    @endfor
                </select>
                <input type="hidden" name="date" id="date" placeholder="年/月/日">
                    <script>
                        function combineDate() {
                        const y = document.getElementById('year').value;
                        const m = document.getElementById('month').value.padStart(2, '0');
                        const d = document.getElementById('day').value.padStart(2, '0');
                        document.getElementById('date').value = `${y}-${m}-${d}`;
                        }
                    </script>
            </div>

            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">
                    検索
                </button>
            </div>
        </div>

        <div class="updata-form__button">
            <button class="updata-button" type="submit">
                データの追加
            </button>
        </div>
    </form>

    <div class="management-table">
        <table class="management-table__inner">
            <tr class="management-table__tow">
                <th class="management-table__header">
                    <span class="management-table__header-span">
                        日付
                    </span>
                    <span class="management-table__header-span">
                        体重
                    </span>
                    <span class="management-table__header-span">
                        食事摂取カロリー
                    </span>
                    <span class="management-table__header-span">
                        運動時間
                    </span>
                </th>
            </tr>
        </table>
    </div>
</div>
@endsection