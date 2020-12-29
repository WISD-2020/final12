@extends('frontend.layouts.master')

@section('title','Home')

@section('content')
  <div class="row text-center">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="img/Industrial-room-style.jpg" alt="" width="500" height="325">
            <div class="card-body">
                <h4 class="card-title">Industrial-style</h4>
                <p class="card-text">不過度裝潢、祼露原始結構的空間，搭配機燈具、鐵件老傢具及復古老件，能展現自由無拘束調性，最適合喜歡自由的你!</p>
            </div>
            <div class="card-footer">
                <a href="{{route('room.index')}}#I" class="btn btn-primary">工業GO</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="img/Nordic-room-style.jpg" alt="" width="500" height="325">
            <div class="card-body">
                <h4 class="card-title">Nordic-style</h4>
                <p class="card-text">分明的色調、慵懶又冷淡的氛圍，引入自然光來平衡室內的色彩，喜愛自然及簡潔的你，快進來看看!</p>
            </div>
            <div class="card-footer">
                <a href="{{route('room.index')}}#N" class="btn btn-primary">北歐GO</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="img/Modern-room-style.jpg" alt="" width="500" height="325">
            <div class="card-body">
                <h4 class="card-title">Modern-style</h4>
                <p class="card-text">推崇科學合理的構造工藝，講究材料特性的發揮，重視理性與功能性，空間的布局與使用功能的完美結合，適合愛好技術美學的你!</p>
            </div>
            <div class="card-footer">
                <a href="{{route('room.index')}}#M" class="btn btn-primary">現代GO</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="img/Minimalism-room-style.jpg" alt="" width="500" height="325">
            <div class="card-body">
                <h4 class="card-title">Minimalism-style</h4>
                <p class="card-text">呈現事物最原本的樣貌，或在設計上刻意留白，消彌物品視覺上對觀看者的意識壓迫，喜愛簡單真實的你快來看看!</p>
            </div>
            <div class="card-footer">
                <a href="{{route('room.index')}}#Min" class="btn btn-primary">簡約GO</a>
            </div>
        </div>
    </div>
  </div>
@endsection
