<x-layout>
    <x-slot name="title">
        S.O.C Fishing - ホーム
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="css/style.css">
    </x-slot>

    <div class="mainImg">
        <div class="title">
            <h1>
                関東釣り場
                <br>
                （サーフ）
            </h1>
            <div class="link">
                <a href="">S.O.Cのインスタはこちら</a>
                <a href="">S.O.C Fishingのインスタはこちら</a>
            </div>
        </div>
    </div>
    <div class="post">
        <h1 class="postTitle">釣り場一覧</h1>
        <form action="">
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
        </form>
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
</x-layout>
