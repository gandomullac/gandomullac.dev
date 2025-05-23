@extends('layout')

@push('styles')
    @vite('resources/css/projects.css')
@endpush

@section('content')
    <div class="flex-wrapper">
        <div class="post__container">
            <div class="post">
                <header class="post__header">
                    <h1 id="post__title">Hello!</h1>
                </header>

                <article class="post__content">

                    <p>My name is Claudio and I'm developer based in Ferrara, Italy</p>
                    <p>I'm a full-time R&D programmer, however I also enjoy developing web apps for clients
                        using my favorite stacks. I also teach courses from time to time.</p>

                    <h2 id="interests">Interests<a class="anchor" href="#interests">#</a></h2>
                    <ul>
                        <li>DevOps: I enjoy managing the whole stack, from VSCode to CI/CD.</li>
                        <li>TDD: because peace of mind is undervalued, and so are unit tests.</li>
                        <li>Cybersecurity: I believe in preventing headaches</li>
                        <li>IoT: I bet my Philips Hue setup is better than yours.</li>
                        <li>Motorcicles: someday I'll get to ride in the sunset.</li>
                        <li>Planes: ... hell yeah.</li>
                        <li>Gym, beach tennis, cycling, music, and everything tech.</li>
                    </ul>

                    <x-curricula :curricula="$curricula" />

                </article>

                <x-footer />

            </div>
        </div>

    </div>
@endsection
