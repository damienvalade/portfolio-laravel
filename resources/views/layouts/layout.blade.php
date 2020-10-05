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

    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title') - Damien Valade"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="https://portfolio.damienvalade.fr/img/favicon/favicon.png"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:site_name" content="Portfolio Damien Valade"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@damien_valade"/>
    <meta name="twitter:creator" content="@damien_valade"/>
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title') - Damien Valade">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="https://portfolio.damienvalade.fr/img/favicon/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link rel="icon" href="/img/favicon/favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
          crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/9c62340df7.js" crossorigin="anonymous"></script>

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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>

@yield('script')

</body>
</html>
