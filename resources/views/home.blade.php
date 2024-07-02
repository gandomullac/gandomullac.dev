@extends('layout')

@section('content')

<style>
    .splash-container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px
    }

    .splash-container {
        font-size: 18px
    }

    .splash h1 {
        font-size: 3em;
        line-height: 1;
        letter-spacing: -.03em;
        margin: 0
    }

    .splash h2 {
        font-size: 2.25em;
        font-weight: 500;
        line-height: 1.25;
        max-width: 22em;
        letter-spacing: -.03em
    }

    .fancy {
        color: #9013fe
    }

    .handle {
        display: inline-block;
        margin-top: .275em;
        color: #9b9b9b;
        letter-spacing: .5px
    }

    .writing {
        text-decoration: none;
        color: #9013fe
    }

    main {
        padding-top: 0;
        padding-bottom: 0;
        height: 100%
    }

    .social-icons {
        justify-content: flex-start;
        padding-top: 1rem;
        margin-left: -.8rem
    }

</style>


<div class="splash-container">
    <div class="splash">

        <h1>Hi, I'm Claudio<span class="fancy">.</span></h1>

        <span class="handle">@gandomullac</span>

        <h2>
            Test Driven Developer
        </h2>


        @php
            $socialLinks = [
            ['title' => 'Email', 'url' => 'mailto:gandomullac@gmail.com', 'icon' => 'email.svg'],
            ['title' => 'Twitter', 'url' => 'https://twitter.com/gandomullac', 'icon' => 'twitter.svg'],
            ['title' => 'GitHub', 'url' => 'https://github.com/gandomullac', 'icon' => 'github.svg'],
            ['title' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/claudio-gandini-fe/', 'icon' =>
            'linkedin.svg'],
            ];
        @endphp

        <x-social-icon :links="$socialLinks" />



    </div>
</div>

@endsection
