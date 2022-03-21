@extends('layout.main')
@section('content')
<section id="show-serie">
    {{--  --}}
    <div class="cover-display">
        <div class="container-small h-100">
            <img src="{{$serie['thumb']}}" alt="">
        </div>
    </div>
    <div class="serie-display">
        <div class="container-small">
                {{-- information --}}
            <div class="serie-info">
                {{-- title --}}
                <h2>{{$serie['title']}}</h2>
                {{-- price --}}
                <div class="purchase-information">
                    <div class="price h-100">
                        <div >
                            <span>U.S. Price:</span>
                            <span>{{$serie['price']}}</span>
                        </div>
                        <div>
                            <span>available</span>
                        </div>
                    </div>
                    <div class="">
                        <span>Check Availability</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                {{-- description --}}
                <p>{{$serie['description']}}</p>
            </div>
            {{-- advertisement --}}
            <div class="advertisment">
                <figure>
                    <figcaption>
                        advertisment
                    </figcaption>
                    <img src="{{asset('images/adv.jpg')}}" alt="">
                </figure>
            </div>
        </div>
    </div>
    <div class="serie-information">
        <div class="container-small">
            <div class="talent">
                <h3>Talent</h3>
                <div class="info">
                        <h4>Art by:</h4>
                    <div>
                        @foreach ($serie['artists'] as $artist)
                            <a href="#">{{$artist}}</a> @if(!$loop->last), @endif 
                        @endforeach
                    </div>
                </div>
                <div class="info">
                        <h4>Written by:</h4>
                    <div>
                        @foreach ($serie['writers'] as $writer)
                            <a href="#">{{$writer}}</a> @if(!$loop->last), @endif 
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="info">
                    <h4>Series:</h4>
                    <a href="#">{{$serie['series']}}</a>
                </div>
                <div class="info">
                    <h4>U.S. Price:</h4>
                    <span>{{$serie['price']}}</span>
                </div>
                <div class="info">
                    <h4>On Sale Date: </h4>
                    <span>{{$serie['sale_date']}}</span>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection