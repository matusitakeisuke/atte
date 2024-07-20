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
        さんお疲れ様です！
      </th>
    </tr>
   </table>
  </div>

  <div class="div__flex">
    <form class="section__form-flex" action="{{ route('stamp.post')}}" method="POST">
      @csrf
      <div class="section__div-center">
        <input type="hidden" name="start_work" value="1">
          <button class="section__button-text-decoration" name="start_work_btn" {{ $canStartWork ? '' : 'disabled' }}>勤務開始</button>
        </div>
      </form>
      <form class="section__form-flex" action="{{ route('stamp.post')}}" method="POST">
      @csrf
      <div class="section__div-center">
      <input type="hidden" name="end_work" value="1">
        <button class="section__button-text-decoration"  name="end_work_btn"  {{ $canEndWork ? '' : 'disabled' }}>勤務終了</button>
      </div>
    </form>
  </div>
  <div class="div__flex">
    <form class="section__form-flex" action="{{ route('stamp.post')}}" method="POST">
      @csrf
    <input type="hidden" name="start_break" value="1">
      <div class="section__div-center">
        <button class="section__button-text-decoration" name="start_break_btn"  {{ $canStartBreak ? '' : 'disabled' }} >休憩開始</button>
      </div>
    </form>
    <form class="section__form-flex" action="{{ route('stamp.post')}}" method="POST">
      @csrf
    <input type="hidden" name="end_break" value="1">
      <div class="section__div-center">
        <button class="section__button-text-decoration" name="end_break_btn"  {{ $canEndBreak ? '' : 'disabled' }}>休憩終了</button>
      </div>
    </form>
  </div>
</div>

<div class="section__div-font-weight">
    <small class="section__small-padding-bottom">Atte,inc</small>
</div>

@endsection