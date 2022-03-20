<?php

$features = config('features');

?>

<div class="featured">
    <div class="container h-100">
        <ul class="h-100">
            @foreach ($features as $feature)
            <li class="h-100">
                <a href="#"><img src="{{asset($feature['image'])}}" alt="{{$feature['text']}}"></a>
                <a href="#">{{$feature['text']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>