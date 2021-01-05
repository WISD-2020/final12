@extends('tenant.layouts.master')
<head>
    <link rel="stylesheet" href="{{URL::asset('css/room.css')}}">
</head>
@section('title','Room')

@section('content')
    <div class="wrap">
        <!-- 第一塊 -->
        <div class="box">
            <div class="pic">
                <a name="I"><img src="img/I1.jpg" alt=""></a>
            </div>
            <div class="text">
                <h2>工業</h2>
                <p>工業風越舊越有味道外觀上製造陳舊感，好比鐵鏽、水泥、混凝土或者鐵皮為主，所以黑灰白等冷色調就成了工業風的主要色調，工業風搭配仿舊金屬鐵器，不只堅韌而原本的仿舊也不必擔心生鏽問題。外露的管線毫不掩飾地把管線支架大喇喇地外露出來，簡單粗暴的設計美學。</p>
            </div>
        </div>
        <!-- 第二塊 -->
        <div class="box">
            <div class="text">
                <h2>北歐</h2>
                <p>充滿北歐氣息，進入房間就猶如走進歐洲的大自然，北歐風就象徵與自然共處，取之於自然用之於自然，因為崇尚自然，所以北風的設計也較為樸實不鋪張，十分重視採光。因此北歐風設計都伴隨著許多向陽的大面窗戶。配色都以白色或樸實的淺色木材為主，也藉此讓白天的陽光可以因為漫色效應充滿整個室內。 </p>
            </div>
            <div class="pic">
                <a name="N"><img src="img/N1.jpg" alt=""></a>
            </div>
        </div>
        <!-- 第三塊 -->
        <div class="box">
            <div class="pic">
                <a name="M"><img src="img/M1.jpg" alt=""></a>
            </div>
            <div class="text">
                <h2>現代</h2>
                <p>現代風配色主要都以單一素材為主，採用的是明度較高的淺色調。這樣可以透過日照進來的漫射效應讓室內更明亮，大大的減少白天的燈源耗電量。以多面鋼化玻璃作為複合空間的隔層，一來給人前衛感，二來整體空間也不會產生視覺壓縮造成窒息感。空間的規劃或者是傢俱上的選擇，整體造型的線條都是十分直白俐落的。收納櫃都採用隱藏式拉門的設計。</p>
            </div>
        </div>
        <!-- 第四塊 -->
        <div class="box">
            <div class="text">
                <h2>簡約</h2>
                <p>以淺色與大地色為主，較少有其它花俏的配色。比起配飾更注重裝潢的實用性。室內空間寬敞通透，追求無壓舒適感。採用實木家具，讓家裡多了一份溫暖感。牆面、天花板等傢俱設計，使用簡潔造型，並以其精細的工藝為特色。</p>
            </div>
            <div class="pic">
                <a name="Min"><img src="img/MM1.jpg" alt=""></a>
            </div>
        </div>
    </div>
@endsection
