{{-- PHP --}}
<?php 
$menus = config('main-menu')
?>

{{-- HTML --}}
<header>
    {{-- TOP HEADER --}}
    <div class="upper-header">
        <div class="container">
            <a href="#"> dc power &#8480; visa &reg;</a>
            <a href="">additional dc sites</a>
            {{-- todo: aggiungere i --}}
        </div>
    </div>
    {{-- BOTTOM HEADER --}}
    <div class="bottom-header">
        <div class="container">
            {{-- LOGO --}}
            <a href="{{route('home')}}">
                <img src="{{asset("images/dc-logo.png")}}" alt="">
            </a>
            {{-- NAVBAR --}}
            <nav class="main-menu h-100">
                <ul class="h-100">
                    @foreach ($menus as $link)
                        <li class="{{request()->routeIs($link['route-name']) ? 'active' : ''}}">
                            <a href="{{route($link['route-name'])}}">{{$link['text']}} </a>
                        </li>
                    @endforeach
                    {{-- TODO:aggiungere loop --}}
                </ul>
            </nav>
            {{-- SEARCHBAR --}}
            <div class="search-bar">
                <div>
                    {{--  --}}
                    <input type="text" placeholder="Search" name="search">
                    <span>
                    {{-- TODO:inserire icona --}}
                    O
                    </span>
                </div>
            </div>
        </div>
    </div>
    

</header>