{{-- 三浦海岸 --}}
<x-layout>
    <x-slot name="title">
        S.O.C Fishing - 三浦海岸
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/show.css') }}">
    </x-slot>

    <div class="showContainer">
        <div class="back-link">
            <a href="{{ route('index') }}">home</a> &raquo; <span>釣り場詳細</span>
        </div>

        <hr>

        <div class="spotInfo">
            <h1>三浦海岸</h1>

            <div class="spotImg">
                <img src="../img/spotImg/miura.jpeg" alt="" width="100%" height="100%">
            </div>

            <h3>場所</h3>
            <p>
                〒238-0101　神奈川県三浦市南下浦町上宮田1096の周辺
                <br>
                三浦海岸駅からすぐ目の前の海岸
            </p>

            <h3>ターゲットごとの解説</h3>
            <dl>
                <dt>シロギス</dt>
                <dd>
                    三浦海岸はシロギスの絶好ポイント！坊主になることはほとんどないのでシロギス狙いの人はぜひ足を運んで欲しい。釣れにくいと言われている8月の下旬でもちょい投げで普通に釣れる。10m〜20mくらいの比較的岸に近い位置で釣れることが多い印象。津久井浜との境にある立ち入り禁止の堤防の横やその近くの沖に堤防が組まれている場所が好ポイント。
                </dd>

                <dt>カレイ</dt>
                <dd>
                    調査中...
                </dd>

                <dt>ヒラメ</dt>
                <dd>
                    調査中...
                </dd>

                <dt>マゴチ</dt>
                <dd>
                    調査中...
                </dd>

                <dt>イシモチ</dt>
                <dd>
                    魚影は少なく釣れにくい。狙うなら夜の方がいい。
                </dd>

                <dt>イナダ</dt>
                <dd>
                    調査中...
                </dd>

                <dt>タチウオ</dt>
                <dd>
                    調査中...
                </dd>

                <dt>シーバス</dt>
                <dd>
                    調査中...
                </dd>
            </dl>

            <h3>総合評価</h3>
            <p>
                とにかくシロギスがアツい場所。ちょい投げで全然釣れるので、初心者やファミリーフィッシングにも最適！！ただ、夏場は海水浴客が多いので早朝の釣りがおすすめ。そのほかのターゲットは現在調査中なのでお待ちください！
            </p>
        </div>

        <hr>

        <div class="socImg">
            <img src="../img/socImage.jpeg" alt="" width="100%" height="100%">
            <a href="https://instagram.com/setagaya_outdoor_club?utm_medium=copy_link">S.O.Cのインスタはこちら</a>
            <a href="https://youtube.com/channel/UCIy-uZpo1qu3a-f2wdv4HkA">S.O.CのYouTubeはこちら</a>
        </div>
    </div>
</x-layout>
