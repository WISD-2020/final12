<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('tenant.index')}}">套房租屋</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">費用說明</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('room.index')}}">房型介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cost.index')}}">費用查看</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('repair.index')}}">修繕回報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mail.index')}}">信件包裹查詢</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.logout') }}">房客登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
