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

    <h2 class="text-center mb-5 mt-5 write-white"><span class="underline">A</span>rticles</h2>

    <div class="container">
        <div class="row">
            <div class="col pl-0 pr-0">
                @foreach( $articles as $article)
                <div class="card m-5">
                    <img class="card-img-top" src="{{ $article->picture }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">Date de création : {{ $article->date }}</small>
                        </p>
                        <p class="card-text">{{ $article->short_content }} ...</p>
                        <a href="/article/{{ $article->id }}"
                           class="btn btn-emerauld text-center">Voir Plus</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
