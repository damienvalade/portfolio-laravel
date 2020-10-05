@extends('layouts.layout')


@section('description')
    Portfolio de Damien Valade alternant en développement WEB & Mobile. Disponible sur Limoges pour toutes propositions. PHP • Symfony • NodeJs • React •  POO • MVC
@endsection

@section('title')
    Portfolio • Présentation
@endsection

@section('link')
    <link rel="stylesheet" type="text/css" href="/dist/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/dist/slick/slick-theme.css"/>
@endsection

@section('content')

    <div class="container">

        <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>
        <div class="col-sm-12">
            <div class="card mb-5">
                @foreach($articles as $article)
                <img class="card-img-top" src="{{ $article->picture }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">
                        <small class="text-muted">{{ $article->date }}</small>
                    </p>
                    <p class="card-text">{{ $article->content }}</p>
                </div>
                @endforeach
            </div>
        </div>


    </div>

@endsection
