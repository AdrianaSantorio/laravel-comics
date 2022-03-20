<?php 
$series = config('comics');
$serie = $series[0]

?>

@extends('layout.main')
@section('content')
<section id="show-serie">
    <div class="cover-display">
        <div class="container-small h-100">
            <img src="{{$serie['thumb']}}" alt="">
        </div>
    </div>
    <div>
        {{-- information --}}
        <div>
            {{-- title --}}
            <h2></h2>
            {{-- price --}}
            <div>

            </div>
            {{-- abstract --}}
            <p></p>
        </div>
        {{-- advertisement --}}
        <div>
            <figure>
                <figcaption>

                </figcaption>
                <img src="" alt="">
            </figure>
        </div>
    </div>
    <div>

    </div>
</section>
@endsection