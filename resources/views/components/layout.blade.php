<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{ $description }}
    <title>{{ $title }}</title>
    {{ $link }}
    <script src=""></script>
</head>
<body>
    <header>
        <p class="soc">S.O.C Fishing</p>


        {{-- PC用メニュー --}}
        <div class="nav">
            <a href="{{ route("index") }}">釣り場一覧</a>
            <span>|</span>
            <a href="{{ route("fish") }}">ターゲット紹介</a>
        </div>


        {{-- スマホ用メニューバー --}}
        <div class="sp-menu">
            <span id="open" class="material-icons">menu</span>
        </div>

    </header>

    <div class="overlay">
        <span id="close" class="material-icons">close</span>
        <nav>
            <ul>
                <li><a href="{{ route("index") }}">釣り場一覧</a> &raquo;</li>
                <li><a href="{{ route("fish") }}">ターゲット紹介</a> &raquo;</li>
            </ul>
        </nav>
    </div>


    {{ $slot }}
    <footer>
        <span>© 2021 S.O.C Co.,Ltd. All Rights Reserved</span>
    </footer>

    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>
