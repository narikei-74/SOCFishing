<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{ $link }}
</head>
<body>
    <header>
        <p class="soc">S.O.C Fishing</p>
        <div class="nav">
            <a href="{{ route("index") }}">釣り場一覧</a>
            <span>|</span>
            <a href="{{ route("fish") }}">ターゲット紹介</a>
        </div>
    </header>
    {{ $slot }}
</body>
</html>
