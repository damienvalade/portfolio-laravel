{{-- # **************** # --}}
{{-- # **** Layout **** # --}}
{{-- # **************** # --}}

<html lang="fr">
<head>
    @include('layouts/google')

    <meta charset="utf-8">
    <title>@yield('title') - Damien Valade</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Damien Valade">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title') - Damien Valade" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="https://portfolio.damienvalade.fr/img/favicon/favicon.png" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Portfolio Damien Valade" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@damien_valade" />
    <meta name="twitter:creator" content="@damien_valade" />
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title') - Damien Valade">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="https://portfolio.damienvalade.fr/img/favicon/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <link rel="icon" href="/img/favicon/favicon.png">

    <link href="/dist/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/dist/js/aos/aos.css" />
    <link href="/fontawesome/css/all.css" rel="stylesheet">

    @yield('link')

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/errors.css" rel="stylesheet">

</head>

<body>

@include('layouts.navbar')

<main>
    @yield('content')
</main>

@include('layouts.footer')


<script src="/dist/js/jquery/jquery.min.js"></script>
<script src="/dist/js/bootstrap/bootstrap.min.js"></script>
<script src="/dist/js/aos/aos.js"></script>

    @yield('script')

</body>
</html>
