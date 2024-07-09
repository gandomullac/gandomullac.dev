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
                    <p>I'm currently a consultant in a system engineer company, however I enjoy most working on developing
                        web apps for clients using my favorite stacks.</p>

                    <h2 id="interests">Interests<a class="anchor" href="#interests">#</a></h2>
                    <ul>
                        <li>Web Development: I strive to code in a future-proof way, iteration after iteration.</li>
                        <li>DevOps: I like to manage the whole stack, from that one missing semicolon to the CI/CD during
                            deployment</li>
                        <li>TDD: because it just makes so much sense.</li>
                        <li>Obsidian.md: it is pretty awesome.</li>
                        <li>Cybersecurity: I played the part of the expert in a couple of courses I teached in.</li>
                        <li>IoT: both domestic and enterprise (I mostly like Philips Hue, they are so very nice).</li>
                        <li>Gym, beach tennis, music and everything tech.</li>
                    </ul>

                    @isset($curricula)
                        <h2 id="work-experiences">Curriculum Vitae<a class="anchor" href="#work-experiences">#</a></h2>
                        <p>Are you hiring? Here you'll find everything you need.</p>


                        @foreach ($curricula as $cv)
                            <p>
                                <a href="{{ $cv->url }}">{{ $cv->nameWithLanguage }}</a>
                            </p>
                        @endforeach
                    @endisset

                </article>

                <x-footer />

            </div>
        </div>

    </div>
@endsection
