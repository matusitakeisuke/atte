<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/index.css')}}">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
  @yield('css')
</head>
<body>

<header class="header">
  <div class="header__div">
    <h3 class="header__h3">Atte</h3>
    <nav class="nav">
      <ul class="nav__ul">
        <form class="form" method="POST">
          @csrf
          <a class="nav__a" href="/">ホーム</a>
          <a class="nav__a" href="/attendance">日付一覧</a>
          <a class="nav__a" href="{{ route('logout.get')}}">ログアウト</a>
        </form>
      </ul>
    </nav>
  </div>
</header>

  <main>
    @yield('index')
  </main>
</body>
</html>