@extends('layouts.app')


@section('content')


    <h1>
        Post : {{$post->title}}
    </h1>

    @include('component.err')

    <div class="container">

        <img height="500" src="{{$post->imgUrl()}}" alt="">

        <p class="fs-5 mt-5 usual-text text-white">
            {{$post->body}}
        </p>

    </div>

@endsection
