@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css')}}">
@endsection

@section('index')

<div class="section">
    @if (session('login_success'))
    <div>
        {{ session('login_success') }}
    </div>
    @endif
<form class="section__form" method="GET">
    <div class="section__div">
        <div class="section__div-margin">
            <a class="section__a-border" href=""><</a>
        </div>
        <div class="section__div-p">
            <p class="section__p">{{ $currentTime }}</p>
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
            <th class="th__tr-border">勤務時間</th>
        </tr>
        @foreach($totalWorkTime as $WorkTime)
        <tr class="tr__td">
            <td class="td__form">{{ $WorkTime['name'] }}</td>
            <td class="td__form">{{ $WorkTime['start_work']}}</td>
            <td class="td__form">{{ $WorkTime['end_work']}}</td>
            <td class="td__form">{{ $WorkTime['total_break']}}</td>
            <td class="td__form">{{ $WorkTime['total_work']}}</td>
        </tr>
        @endforeach
        @foreach ($pages as $page)
        <tr>
          <td>
            {{$page->title}}
          </td>
        </tr>
        @endforeach
        <tr class="table__page">
            <th class="th__page">{{ $pages->links() }}</th>
        </tr>
    </table>
  </div>
</div>

<div class="section__div-font-weight">
<small class="section__small-padding-bottom">Atte, inc</small>
</div>

@endsection