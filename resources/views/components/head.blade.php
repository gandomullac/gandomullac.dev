<head>
    <title>{{ $title }}</title>

    <meta charset="UTF-8">
    <meta name="language" content="en">
    <meta name="author" content="gandomullac">
    <meta name="description" content="gandomullac's portfolio">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Gandomullac's Portfolio" />
    <meta name="twitter:description" content="Gandomullac's Portfolio & Blog" />
    <meta name="twitter:site" content="@gandomullac" />
    <meta name="twitter:creator" content="https://twitter.com/gandomullac" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <x-styles />

    <link rel="alternate" type="application/rss+xml+xml" href="{{ env('APP_URL') }}" title="gandomullac.dev" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://www.gandomullac.dev/",
            "name": "Gandomullac's Portfolio",
            "author": {
                "@type": "Person",
                "name": "gandomullac"
            },
            "description": "gandomullac's portfolio",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.gandomullac.dev/"
            }
        }
    </script>

</head>
