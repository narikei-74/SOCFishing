{{-- 九十九里浜（一宮） --}}
<x-layout>
    <x-slot name="title">
        S.O.C Fishing 釣り場ー九十九里浜（一宮）
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
            <h1>九十九里浜　一宮</h1>

            <div class="spotImg">
                <img src="../img/spotImg/kujuItimiya.jpeg" alt="" width="100%" height="100%">
            </div>

            <h3>場所</h3>
            <p>〒299-4303　千葉県長生郡一宮町東浪見の付近</p>

            <h3>ターゲットごとの解説</h3>
            <dl>
                <dt>シロギス</dt>
                <dd>
                    日中はサーファーが多く満足に釣りができないため、日中に行動する習性があるシロギスを狙うのは少し難しい。8月の下旬は釣れにくい。
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
                    夜に狙うのが圧倒的におすすめ！ヘッドランドから投げなくても、サーフからの投げで結構良い型のイシモチが狙える。数も結構いるのでイシモチの絶好ポイントである。8月の下旬はすごく釣れるのでぜひ行ってみてほしい。ちょい投げだと少し厳しいのでサーフから思いっきり遠投しよう！！
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
            <p>昼間はサーファーが多すぎてヘッドランドからしか釣れないため、探るポイントが限られてしまう。なので夜がおすすめのポイント。イシモチの魚影が濃いので、夜にイシモチ釣りに行くのがベスト。</p>
        </div>

        <hr>

        <div class="socImg">
            <img src="../img/socImage.jpeg" alt="" width="100%" height="100%">
            <a href="">S.O.Cのインスタはこちら</a>
            <a href="">S.O.C Fishingのインスタはこちら</a>
        </div>
    </div>
</x-layout>
