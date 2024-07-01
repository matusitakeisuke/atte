@extends('layouts.atte')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('atte')



    <div class="section">
        <h2 class="section__h2">ログイン</h2>

            @foreach ($errors->all() as $error)
                <div>
                    <p class="error">{{ $error }}</p>
                </div>
                @endforeach

        <form class="section__form" method='POST' action="{{ route('login') }}">
        @csrf
            <div>
                <input  type="hidden"  name="id" value="{{ old('id', $id) }}">
            </div>
            <div class="form__div">
                <input class="form__input" type="tel" placeholder="メールアドレス" name="email">
            </div>
            <div class="form__div">
                <input class="form__input" type="password" placeholder="パスワード" name="password">
            </div>
            <div class="section__div">
                <button class="section__button" href="">ログイン</button>
            </div>
        </form>
        <div class="section__div-center">
            <small class="section__small">アカウントをお持ちでない方はこちらから</small>
        </div>
        <div class="section__div-padding-bottom">
            <a class="section__a-color" href="/register">会員登録</a>
        </div>
    </div>

    <div class="section__div-font-weight">
        <small class="section__small-padding-bottom">Atte,inc</small>
    </div>


@endsection