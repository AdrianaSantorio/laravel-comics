{{-- PHP --}}
@php 
$menus = config('main-menu')
@endphp

{{-- HTML --}}
<header>
    {{-- TOP HEADER --}}
    <div class="upper-header">
        <div class="container">
            <a href="#"> dc power &#8480; visa &reg;</a>
            <a href="#">additional dc sites <i class="fa-solid fa-caret-down"></i></a>
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
                            <a href="{{route($link['route-name'])}}">{{$link['text']}} 
                                @if($loop->last) <i class="fa-solid fa-caret-down"></i> @endif 
                            </a>
                        </li>
                    @endforeach
                    {{-- TODO:aggiungere loop icona --}}
                </ul>
            </nav>
            {{-- SEARCHBAR --}}
            <div class="search-bar">
                <div>
                    {{--  --}}
                    <input type="text" placeholder="Search" name="search">
                    <span>
                    {{-- TODO:inserire icona --}}
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    

</header>