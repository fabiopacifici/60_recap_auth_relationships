@extends('layouts.app')

@section('page-title', 'Comics Page')

@section('content')

<div class="hero_image">

</div>

<div class="comics pb-4">


    <div class="container">
        <h1>Current Series</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">

            @forelse($comics as $id => $comic)
            <div class="col">
                <div class="comic">
                    <a href="{{route('guest.comics.show', $id)}}">

                        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    </a>
                    <p>{{$comic['series']}}</p>
                </div>
            </div>
            @empty
            <div class="col">No results to show</div>
            @endforelse

        </div>
    </div>


    <div class="text-center">
        <a class="btn btn-primary text-uppercase rounded-0" href="#">Load mode</a>
    </div>

</div>

<div class="banner bg-primary py-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
            <div class="col">
                <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
        </div>
    </div>
</div>

@endsection
