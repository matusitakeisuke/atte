@extends('layouts.atte')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('atte')

<div class="section">
        <h2 class="section__h2">会員登録</h2>

          @foreach ($errors->all() as $error)
            <div>
                <p class="error">{{ $error }}</p>
            </div>
          @endforeach


        <form class="section__form" action="{{ route('register.post')}}" method="POST">
            @csrf
            <div class="form__div">
                <input class="form__input" type="text" placeholder="名前" name="name" value="{{ old('name') }}">
            </div>
            <div class="form__div">
                <input class="form__input" type="tel" placeholder="メールアドレス" name="email" value="{{ old('email') }}">
            </div>
            <div class="form__div">
                <input class="form__input" type="password" placeholder="パスワード" name="password">
            </div>
            <div class="form__div">
                <input class="form__input" type="password" placeholder="確認用パスワード" name="password_confirmation">
            </div>
            <div class="section__div">
            <button class="section__button" href="">会員登録</button>
            </div>
        </form>
        <div class="section__div-center">
            <small class="section__small">アカウントをお持ちの方はこちらから</small>
        </div>
        <div class="section__div-padding-bottom">
            <a class="section__a-color" href="/login">ログイン</a>
        </div>
    </div>

    <div class="section__div-font-weight">
        <small class="section__small-padding-bottom">Atte,inc</small>
    </div>

@endsection