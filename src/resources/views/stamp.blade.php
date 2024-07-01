@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css')}}">
@endsection

@section('index')

<div class="section">
  <div class="div__table">
    @if (session('login_success'))
    <div>
      {{ session('login_success') }}
    </div>
    @endif
   <table class="section__table">
    <tr class="section__tr">
      <form class="section__form-input">
        <div class="section__div-input">
          <input class="section__input" type="text" value="{{  optional(Auth::user())->name }}">
        </div>
      </form>
      <th class="section__th">
        さんお疲れ様です
      </th>
    </tr>
   </table>
  </div>

  <form class="section__form-flex">
    <div class="section__div-center">
        <a class="section__a-text-decoration" href="">勤務開始</a>
    </div>
    <div class="section__div-center">
        <a class="section__a-text-decoration" href="">勤務終了</a>
    </div>
  </form>
  <form class="section__form-flex">
    <div class="section__div-center">
        <a class="section__a-text-decoration" href="">休憩開始</a>
    </div>
    <div class="section__div-center">
        <a class="section__a-text-decoration" href="">休憩終了</a>
    </div>
  </form>
</div>

<div class="section__div-font-weight">
    <small class="section__small-padding-bottom">Atte,inc</small>
</div>
@endsection