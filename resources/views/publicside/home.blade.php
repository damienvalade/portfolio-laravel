{{-- # **************** # --}}
{{-- # ***** Home ***** # --}}
{{-- # **************** # --}}

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


@endsection

@section('script')
    <script type="text/javascript" src="/dist/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>

    <script>
        AOS.init();
    </script>
@endsection
