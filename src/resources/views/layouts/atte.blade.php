<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/atte.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    @yield('css')
</head>
<body>
    
    <header class="header">
        <div class="header__div">
            <h3 class="header__h3">Atte</h3>
        </div>
    </header>

<main>
    @yield('atte')
</main>

</body>
</html>