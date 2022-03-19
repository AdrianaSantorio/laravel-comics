@php 
    $footerMenus = config('footer-menu');
    $socials = config('social-menu');
@endphp


<footer>
    <div class="upper-footer">
        <div class="container">
            <nav>
                <ul>
                    @foreach ($footerMenus as $menu)
                        <li>
                            {{-- footer menu title --}}
                            <h3>{{$menu['title']}}</h3>
                            {{-- footer menu links --}}
                            <ul>
                                @foreach($menu['links'] as $link)
                                <li>
                                    <a href="{{$link['url']}}"> {{$link['text']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                   @endforeach
               </ul>
            </nav>
            <p> All site content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br> <a href="#">Cookies Settings</a></p>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container h-100">
            {{-- sign up button --}}
            <div class="sign-up-button">
                <a href="#">SIGN UP NOW</a>
            </div>
            {{--social--}}
            <section class="social">
                <span>FOLLOW US</span>
                <div>
                    @foreach ($socials as $link)
                        <a href="{{$link['url']}}">
                            <img src="{{asset($link['image'])}}" alt="{{$link['name']}}">
                        </a>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

</footer>