<x-layout class="fish">
    <x-slot name="title">
        S.O.C Fishing - ターゲット紹介
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fishPost.css">
    </x-slot>

    <div class="fishPosts">
        <div class="back-link">
            <a href="{{ route('index') }}">home</a> &raquo; <span>ターゲットフィッシュ紹介</span>
        </div>

        <hr>

        <h1>ターゲットフィッシュ紹介</h1>

        <div class="contents">
            <h2>目次</h2>
            <div class="contentsGrid">
                <span><a href="#sirogisu">シロギス</a></span>
                <span><a href="#karei">カレイ</a></span>
                <span><a href="#hirame">ヒラメ</a></span>
                <span class="magoti"><a href="#magoti">マゴチ</a></span>
                <span><a href="#isimoti">イシモチ</a></span>
                <span><a href="#inada">イナダ</a></span>
                <span><a href="#tatiuo">タチウオ</a></span>
                <span class="si-basu"><a href="#si-basu">シーバス</a></span>
            </div>
        </div>

        <hr>

        {{-- シロギス --}}
        <div class="fishPost" id="sirogisu">
            <h2>シロギス</h2>
            <div class="fishImg">
                <img src="img/fishImg/sirogisu.jpeg" alt="" width="100%" height="100%">
            </div>
            <h3>シーズン</h3>
            <p>
                5月〜9月
                <br>
                <br>
                8月後半は水温が高くなりすぎるため少し難易度が上がる。おすすめは7月〜8月前半と9月後半。
            </p>
            <h3>習性</h3>
            <p>
                砂地に生息する魚。日が出ている時間帯に活発に行動するため夜釣りだと難易度が上がる。ただ、30cmを超える大物は警戒心が強いため夜の方が釣りやすい。キスは大きな移動はあまり行わないので、比較的同じ場所に留まる傾向がある。群れで行動し、海岸線に沿って泳ぐという習性があるため、釣れた距離というのが非常に重要になってくる。上手くハマれば同じ距離で何十匹と釣れることもある。駆け上がりや障害物がある場所に溜まりやすいため、糸を巻いているときに重くなるポイントや沖にテトラポットがある場所などが絶好のポイントである。
            </p>
            <h3>釣り方</h3>
            <p>
                シーズン初期や終盤なら遠投、7月・8月はちょい投げでも狙える。サーフからであれば遠投できる方が有利だが、場所や時期によってはちょい投げでも十分釣れる。餌はジャリメやイソメなどの虫餌を使うのが一般的。
                <br>
                <br>
                キス釣りには二つの釣りスタイルがある。一つは竿を手で持ち、ズルズルと仕掛けを巻いてさびく釣りで、もう一つは竿を置いて待つ釣りだ。さびく釣りのポイントはアリの歩くようなスピードでゆっくりと巻いてくること。待つ釣りのポイントは3〜5分おきくらいに仕掛けを巻いて距離を変えること。どちらのスタイルにも言えるポイントとしては、最初はできる限り遠くの沖から探り、一匹釣れたりヒットがあったりしたらその距離を覚えておき、徹底的にその距離を狙うことだ。そのため、ラインは距離ごとに色が変わっているものの方が確実におすすめである。またキス釣りであれば数が釣れておすすめなのはさびく釣りの方だ。
                <br>
                <br>
                タックルは遠投竿と遠投用の大きめのリール。ラインはPEかナイロンのどちらか。ナイロンより高いがPEの方が飛距離が出てアタリもわかりやすいのでおすすめ。力糸（フロロカーボン）もPEかナイロンのどちらかで、これをラインの先に結びつける。結ぶのがめんどくさかったり大変そうと思う方は、力糸（フロロカーボン）付きのラインを買うのがおすすめ。そしてジェット天秤というオモリを力糸に結びつけ、オモリの先に仕掛けをつけて完成。エサはジャリメならそのまま、イソメなら長すぎるのでハサミで短く切ってからつける。3〜5センチくらいがちょうどいい。また、ジャリメが一番キスが食べやすい大きさなので釣れやすいと言われている。
            </p>
            <h3>おすすめの食べ方</h3>
            <ul>
                <li>刺身（鮮度の良いうちに！塩水処理をするのがおすすめ！）</li>
                <li>天ぷら（定番！！）</li>
            </ul>
            <h3>おすすめの釣り場</h3>
            <ul>
                <li><a href="{{ route('miura') }}">三浦海岸</a></li>
            </ul>
        </div>

        {{-- カレイ --}}
        <div class="fishPost" id="karei">
            <h2>カレイ</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        {{-- ヒラメ --}}
        <div class="fishPost" id="hirame">
            <h2>ヒラメ</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        {{-- マゴチ --}}
        <div class="fishPost" id="magoti">
            <h2>マゴチ</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        {{-- イシモチ --}}
        <div class="fishPost" id="isimoti">
            <h2>イシモチ</h2>
            <div class="fishImg">
                <img src="img/fishImg/isimoti.jpeg" alt="" width="80%" height="100%">
            </div>
            <h3>シーズン</h3>
            <p>
                5月〜11月
            </p>
            <h3>習性</h3>
            <p>Comming Soon</p>
            <h3>釣り方</h3>
            <p>Comming Soon</p>
            <h3>おすすめの食べ方</h3>
            <ul>
                <li>刺身（早めに内臓を取って処理しよう！！）</li>
                <li>丸ごと炊き込みご飯（S.0.Cのおすすめ！！）</li>
                <li>塩焼き（純粋に美味い！！）</li>
            </ul>
            <h3>おすすめの釣り場</h3>
            <ul>
                <li><a href="{{ route('kujuItimiya') }}">九十九里浜　一宮</a></li>
            </ul>
        </div>

        {{-- イナダ --}}
        <div class="fishPost" id="inada">
            <h2>イナダ</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        {{-- タチウオ --}}
        <div class="fishPost" id="tatiuo">
            <h2>タチウオ</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        {{-- シーバス --}}
        <div class="fishPost" id="si-basu">
            <h2>シーバス</h2>
            <p>Comming Soon</p>
            {{-- <img src="" alt="" width="400" height="300">
            <h3>シーズン</h3>
            <h3>習性</h3>
            <h3>釣り方</h3>
            <h3>おすすめの釣り場</h3> --}}
        </div>

        <hr>

        <div class="socImg">
            <img src="img/socImage.jpeg" alt="" width="100%" height="100%">
            <a href="https://instagram.com/setagaya_outdoor_club?utm_medium=copy_link">S.O.Cのインスタはこちら</a>
            <a href="https://youtube.com/channel/UCIy-uZpo1qu3a-f2wdv4HkA">S.O.CのYouTubeはこちら</a>
        </div>
    </div>
</x-layout>
