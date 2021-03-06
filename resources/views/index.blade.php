<x-layout>
    <x-slot name="description">
        <meta name="description" content="シロギス、ヒラメ、シーバスなどの釣り方や釣り場を初心者でもわかりやすく解説しています。関東の釣れる場所（サーフ）を紹介。皆さんの釣果アップに役立つはずです！！">
    </x-slot>
    <x-slot name="title">
        S.O.C Fishing - ホーム 釣り場一覧
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </x-slot>

    <div class="mainImg">
        <div class="title">
            <h1>
                関東釣り場
                <br>
                （サーフ）
            </h1>
            <div class="link">
                <a href="https://instagram.com/setagaya_outdoor_club?utm_medium=copy_link">S.O.Cのインスタはこちら</a>
                <a href="https://youtube.com/channel/UCIy-uZpo1qu3a-f2wdv4HkA">S.O.CのYouTubeはこちら</a>
            </div>
        </div>
    </div>
    <div class="post">
        <h1 class="postTitle">釣り場一覧</h1>
        {{-- <form action="{{ route('search') }}" method="POST">
            <p class="conditions">条件を絞る</p>
            <div class="send">
                <div class="form">
                    <label>都道府県 <input type="text"></label>
                    <label for="">
                        ターゲット
                        <select>
                            <option value="">選択しない</option>
                            <option value="">シロギス</option>
                            <option value="">カレイ</option>
                            <option value="">マゴチ</option>
                            <option value="">ヒラメ</option>
                            <option value="">イシモチ</option>
                            <option value="">イナダ</option>
                            <option value="">タチウオ</option>
                            <option value="">シーバス</option>
                        </select>
                    </label>
                </div>
                <button class="btn">検索</button>
            </div>
        </form> --}}
        <table>
            <thead>
                <tr>
                    <th>釣り場名</th>
                    <th>都道府県</th>
                    <th>No.1ターゲット</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fishingSpots as $fishingSpot)
                <tr>
                    <td><a href="{{ route("$fishingSpot->url") }}">{{ $fishingSpot->name }}</a></td>
                    <td>{{ $fishingSpot->prefecture }}</td>
                    <td>{{ $fishingSpot->topFish }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <hr>

    <div class="socImg">
        <img src="img/socImage.jpeg" alt="" width="100%" height="100%">
        <a href="https://instagram.com/setagaya_outdoor_club?utm_medium=copy_link">S.O.Cのインスタはこちら</a>
        <a href="https://youtube.com/channel/UCIy-uZpo1qu3a-f2wdv4HkA">S.O.CのYouTubeはこちら</a>
    </div>
</x-layout>
