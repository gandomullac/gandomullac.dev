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

                    <p>My name is Claudio and I'm a techy based in Ferrara</p>
                    <p>I'm currently a full-time consultant in a system engineer company, however I enjoy most working on
                        developing
                        web apps for clients using my favorite stacks.</p>

                    <h2 id="interests">Interests<a class="anchor" href="#interests">#</a></h2>
                    <ul>
                        <li>Web Development: I strive to write future-proof code.</li>
                        <li>DevOps: I'm used to manage the whole stack, from that one missing semicolon to the CI/CD during
                            deployment.</li>
                        <li>TDD: because peace of mind is underestimated, and so are unit tests.</li>
                        <li>Obsidian.md: it is pretty awesome.</li>
                        <li>Cybersecurity: I played the part of the expert in a couple of courses I teached in.</li>
                        <li>IoT: both domestic and enterprise (I mostly like Philips Hue, they are so very nice).</li>
                        <li>Gym, beach tennis, cycling, music and everything tech.</li>
                    </ul>

                    <x-curricula :curricula="$curricula" />

                </article>

                <x-footer />

            </div>
        </div>

    </div>
@endsection
