@extends('layout')

@push('styles')

    <link type="text/css" rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

@endPush

@section('content')


<div class="splash-container">
    <div class="splash">

        {{-- <h1>Hi, I'm Claudio<span class="fancy">.</span></h1> --}}

        <div>
            <h1>Hi, I'm <span id="typed-output">Claudio Gandini</span></h1>
        </div>



        <span class="handle">System administrator <span style="color:red">|</span> WebDev</span>
        {{-- <span class="handle">@gandomullac</span> --}}

        <h2>
            Test Driven <span class="fancy-underline">Developer</span>
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Funzione per generare ritardi casuali
        function randomDelay(base, variance) {
            return Math.floor(Math.random() * variance) + base;
        }

        // Mostra la prima scritta e aspetta 3 secondi
        setTimeout(function () {
            var options = {
                strings: [
                    "Claudio Gandini",
                    "Gando",
                    "Claude",
                    "Clod",
                    "Clœd",
                    "Clöd",
                    "Cloddo",
                    "Cloddoman",
                    "CL",
                    "Super",
                    "S.",
                    "Super Clod",
                    "Suuupah",
                    "KRAUT",
                    "Ganz",
                    "Ganzerker",
                    "Callum",
                    "Mullac",
                    "CLOOOOOOOOD",
                    "Gando McCallum",
                ],
                typeSpeed: 70,
                backSpeed: 50,
                backDelay: 2000,
                loop: true,
                preStringTyped: function (arrayPos, self) {
                    // Modifica i tempi di digitazione e cancellazione per renderli più casuali
                    self.typeSpeed = randomDelay(40, 70);
                    self.backSpeed = randomDelay(25, 50);
                },
                onStringTyped: function (arrayPos, self) {
                    // Modifica i tempi di backDelay per renderli più casuali
                    self.backDelay = randomDelay(1500, 2500);
                }
            };

            var typed = new Typed("#typed-output", options);
        }, 2500); // Attendi 2.5 secondi prima di avviare Typed.js
    });

</script>
@endsection
