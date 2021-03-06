@extends('layout.main')

@section('title', 'home')

@section('content')

<section class="series-gallery">
    <div class="container">
        {{-- LABEL --}}
        <div class="label">
            <span>current series</span>
        </div>
        <ul> 
            @forelse ($comics as $index=> $comic)
                <li>
                    <a href="{{ route("serie", ['id' => $index])}}">
                    {{-- CARD --}}
                    <div class="card">
                        <figure>
                            {{-- card figure --}}
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            {{-- card text --}}
                            <figcaption>{{$comic['series']}}</figcaption>
                        </figure>
                    </div>
                    </a>            
                </li>
            @empty
                <li>
                    <h2>Non ci sono nuove uscite disponibili!</h2>
                </li>
            @endforelse
        </ul>
        {{-- BUTTON --}}
        <button>load more</button>
    </div>
</section>
{{-- FEATURED --}}
@include('includes.featured')
@endsection