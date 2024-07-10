<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>{{ env('APP_NAME') }}</title>

    <meta charset="UTF-8">
    <meta name="language" content="en">
    <meta name="description" content="gandomullac's portfolio">
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

    <x-styles />

    <link rel="alternate" type="application/rss+xml+xml" href="{{ env('APP_URL') }}" title="gandomullac.dev" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https:\/\/www.gandomullac.com\/",
            "name": "",
            "author": {
                "@type": "Person",
                "name": "gandomullac"
            },
            "description": "gandomullac's portfolio"
        }

    </script>

</head>

<body>
    <div class="burger__container">
        <div class="burger">
            <div class="burger__meat burger__meat--1"></div>
            <div class="burger__meat burger__meat--2"></div>
            <div class="burger__meat burger__meat--3"></div>
        </div>
    </div>


    @php
        $navigationLinks = [
            ['label' => 'about', 'route' => 'about'],
            // ['label' => 'blog', 'route' => 'blog'],
            // ['label' => 'consulting', 'route' => 'consulting'],
            ['label' => 'home', 'route' => 'home'],
            // ['label' => 'learning', 'route' => 'learning'],
            ['label' => 'projects', 'route' => 'projects'],
            // ['label' => 'uses', 'route' => 'uses'],
        ];
    @endphp

    <x-navigation-menu :links="$navigationLinks" />



    <main>

        @yield('content')

    </main>


    <x-scripts />
</body>

</html>
