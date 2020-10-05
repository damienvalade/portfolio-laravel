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
    <section class="container mt-5 mb-5">

        <h2 class="text-center mb-5"><span class="underline">C</span>ontact</h2>

        <div class="row write-white">

            <div class="col-md-6">
                <!--Section heading-->

                <!--Section description-->
                <p class="text-justify pb-3">Si vous avez des missions freelance, ou si vous désirez un
                    devis, n’hésitez pas à me contacter soit en utilisant le formulaire soit par téléphone, je serais
                    heureux
                    de vous répondre dans les plus brefs délais.</p>
                <p class="fa-text"><i class="fa fa-map-marker"></i>Limoges - FRANCE</p>
                <p class="fa-text"><i class="fa fa-phone"></i>06.69.38.18.55</p>
                <p class="fa-text"><i class="fa fa-link"></i>portfolio.damienvalade.fr</p>
                <p class="fa-text"><i class="fa fa-envelope-o"></i>damien@damienvalade.fr</p>
            </div>
            <div class="col-md-6">
                <div class="card card-user bg-secondary ">
                    <div class="card-header">
                        <h5 class="card-title text-center black">Me contacter</h5>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <form method="post" action="contact">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Name" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control @error('phone_number') is-invalid @enderror"
                                               placeholder="Phone Number" name="phone">
                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                               placeholder="Subject" name="subject">
                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control textarea @error('message') is-invalid @enderror"
                                                  placeholder="Message" name="message"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn-arrow">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
