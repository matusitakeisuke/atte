@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css')}}">
@endsection

@section('index')

<div class="section">
    <form class="section__form">
        <div class="section__div">
          <div class="section__div-margin">
            <a class="section__a-border" href=""><</a>
          </div>
          <div class="section__div-p">
            <p class="section__p">2021-11-01</p>
          </div>
          <div class="section__div-margin">
            <a class="section__a-border" href="">></a>
          </div>
        </div>
    </form>
    <div class="section__div-table">
        <table class="table__tr">
            <tr class="tr__th">
                <th class="th__tr-border">名前</th>
                <th class="th__tr-border">勤務開始</th>
                <th class="th__tr-border">勤務終了</th>
                <th class="th__tr-border">休憩時間</th>
                <th class="th__tr-border">休憩終了</th>
            </tr>
            <tr class="tr__td">
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
            </tr>
            <tr class="tr__td">
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
            </tr>
            <tr class="tr__td">
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
            </tr>
            <tr class="tr__td">
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
            </tr>
            <tr class="tr__td">
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
                <td class="td__form">
                    <form class="form__input" action="">
                        <input class="input__form" type="text" value="">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <td>
                        <!-- ページネーション -->
                    </td>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="section__div-font-weight">
    <small class="section__small-padding-bottom">Atte, inc</small>
</div>

@endsection