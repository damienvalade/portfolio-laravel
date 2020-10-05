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

    <div class="container-fluid bg-white">
        <div class="row">
            <section class="bg-grey col-lg-6 col-m-12 text-center pt-5 pb-5">
                <img class="radius-50 img-fluid max-width-80" style="background-color: #59bd9c;"
                     src="/img/pp/DamienValade.png" alt="Damien Valade">
                <h1 class="mt-5 name-style special-font-name">
                    <span class="d-block">Damien Valade</span>
                    <span class="status-style special-font-name">Developpeur PHP/Symfony Junior</span>
                </h1>
            </section>

            <section class="col-lg-6 col-m-12 w-100 pt-5 pb-5 m-auto">
                <div class="m-3">
                    <h2 class="text-center special-font-cat"><span class="underline">P</span>resentation</h2>
                    <p class="mt-5 text-justify">
                        Ayant fni une certifcation de «développeur PHP/symfony» chez OpenClassrooms. Je suis à la
                        recherche d’une entreprise, afin de pouvoir monter en compétences dans le développement, et
                        vivre de ma passion.
                    </p>
                    <p class="text-justify">
                        Je suis effectivement passionné d’informatique, et cela depuis mon enfance; je suis aussi un
                        gamer et compétiteur dans l’âme, j’aime me dépasser et relever de nouveaux défis.
                    </p>
                </div>
            </section>
        </div>
    </div>

    <section class="w-100 d-flex justify-content-center p-5 emerald">
        <a class="btn-arrow" href="/img/CV/DamienCV.pdf">Voir mon CV</a>
    </section>

    <section class="bg-white pb-5 pt-5 b" data-aos="fade-up"
             data-aos-duration="1000">
        <h2 class="text-center special-font-cat"><span class="underline">C</span>ompetences</h2>
        <div class="row justify-content-center m-0">

            @foreach( $skills as $skill)
                <div class="col-4 col-sm-3 col-md-2 col-lg-2 p-0">
                    <div class="card-body text-center">
                        <div class="fab-personal text-center">
                            {!!  $skill->url !!}
                        </div>
                        <p class="text-center">{{ $skill->name }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section class="pt-5 pb-5" data-aos="fade-up"
             data-aos-duration="1000">
        <h2 class="text-center special-font-cat"><span class="underline">P</span>arcours</h2>

        <div class="timeline">
            @foreach( $diplomas as $diploma)
                <section class="contain mt-5 {{ $diploma->side }}">
                    <div class="content {{ $diploma->side }}-arrow" data-aos="fade-up"
                         data-aos-anchor-placement="center-bottom">
                        <h3>{{ $diploma->name }}</h3>
                        <p>{{ $diploma->date }}</p>
                        <p>{{ $diploma->place }}</p>
                        {!! $diploma->description !!}
                    </div>
                </section>
            @endforeach
        </div>
    </section>

    <section class="container-fluid purple pt-5 pb-5">
        <div class="container" data-aos="fade-up"
             data-aos-duration="1000">
            <h2 class="text-center text-white special-font-cat"><span class="underline">C</span>ertification</h2>
            <div class="regular slider m-5">
                @foreach( $oc_certificates as $oc_certificate)
                    <div>
                        <img src="{{ $oc_certificate->url }}" alt="{{ $oc_certificate->name }}" class="img-fluid"/>
                        <p class="write-white text-truncate">{{ $oc_certificate->name}}</p>
                        <p class="write-white">{{ $oc_certificate->date }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container pt-5 mb-5" id="projets">
        <h2 class="text-center special-font-cat"><span class="underline">P</span>rojets</h2>
        <div class="row mt-5">

            <h3 class="w-100 m-3 pb-5 special-font-cat size-modify">Client</h3>
            @foreach( $clients as $client)
                    <div class="write-white col-lg-6 col-m-12 mt-2 mb-2">
                        <img src="{{ $client->picture }}" class="img-fluid" alt="{{ $client->name }}">
                        <h4 class="w-100 text-truncate mt-2">{{ $client->name }}</h4>
                        <p>{{ $client->date }}</p>
                        <p class="w-100">{{ $client->technologies }}</p>
                        @if ($client->git)
                            <a href="{{ $client->git }}" class="color-green-fa"><i class="fab fa-github"></i></a> /
                        @endif
                        <a href="{{ $client->url }}" class="color-green-fa"><i class="fas fa-link"></i></a>
                    </div>
            @endforeach

            <h3 class="w-100 m-3 mt-5 pb-5 special-font-cat size-modify">Personnel</h3>
            @foreach( $personals as $personal)
                    <div class="write-white col-lg-6 col-m-12 mt-2 mb-2">
                        <img src="{{ $personal->picture }}" class="img-fluid" alt="{{ $personal->name }}">
                        <h4 class="w-100 text-truncate mt-2">{{ $personal->name }}</h4>
                        <p>{{ $personal->date }}</p>
                        <p class="w-100">{{ $personal->technologies }}</p>
                        @if ($personal->git)
                            <a href="{{ $personal->git }}" class="color-green-fa"><i class="fab fa-github"></i></a> /
                        @endif
                        <a href="{{ $personal->url }}" class="color-green-fa"><i class="fas fa-link"></i></a>
                    </div>
            @endforeach

            <h3 class="w-100 m-3 mt-5 pb-5 special-font-cat size-modify">Formation</h3>
            @foreach( $schools as $school)
                    <div class="write-white col-lg-6 col-m-12 mt-2 mb-2">
                        <img src="{{ $school->picture }}" class="img-fluid" alt="{{ $school->name }}">
                        <h4 class="w-100 text-truncate mt-2">{{ $school->name }}</h4>
                        <p>{{ $school->date }}</p>
                        <p class="w-100">{{ $school->technologies }}</p>
                        @if ($school->git)
                        <a href="{{ $school->git }}" class="color-green-fa"><i class="fab fa-github"></i></a> /
                        @endif
                        <a href="{{ $school->url }}" class="color-green-fa"><i class="fas fa-link"></i></a>
                    </div>
            @endforeach

        </div>
    </section>


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
