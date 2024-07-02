<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>gandomullac.dev</title>

    <meta charset="UTF-8">
    <meta name="language" content="en">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@gandomullac" />
    <meta name="twitter:creator" content="https://twitter.com/gandomullac" />



    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" />

    @include('style')

    <link rel="alternate" type="application/rss+xml+xml" href="{{ env('APP_URL') }}"
        title="gandomullac.dev" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https:\/\/www.gandomullac.dev\/",
            "name": "",
            "author": {
                "@type": "Person",
                "name": ""
            },
            "description": ""
        }

    </script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="burger__container">
        <div class="burger" aria-controls="navigation" aria-label="Menu">
            <div class="burger__meat burger__meat--1"></div>
            <div class="burger__meat burger__meat--2"></div>
            <div class="burger__meat burger__meat--3"></div>
        </div>
    </div>


    <nav class="nav" id="navigation">
        <ul class="nav__list">


            <li>
                <a href="{{ route('about') }}">about</a>
            </li>

            <li>
                <a href="{{ route('blog') }}">blog</a>
            </li>

            <li>
                <a href="{{ route('consulting') }}">consulting</a>
            </li>

            <li>
                <a href="{{ route('home') }}">home</a>
            </li>

            <li>
                <a href="{{ route('learning') }}">learning</a>
            </li>

            <li>
                <a href="{{ route('projects') }}">projects</a>
            </li>

            <li>
                <a href="{{ route('uses') }}">uses</a>
            </li>

        </ul>
    </nav>


    <main>

        @yield('content')

    </main>


    @include('scripts')

</body>

</html>
