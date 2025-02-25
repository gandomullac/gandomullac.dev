@extends('layout')

@push('styles')
    @vite('resources/css/projects.css')
@endpush

@section('content')
    <div class="flex-wrapper">
        <div class="post__container">
            <div class="post">
                <header class="post__header">
                    <h1 id="post__title">Download area</h1>
                </header>

                <article class="post__content">

                    <p>This is my very own space to host downloadable files for my courses.</p>
                    <p>Are you not a student? <i>Then get out >:[</i> </p>

                    <h2 id="downloads">Downloads<a class="anchor" href="#downloads">#</a></h2>

                    @forelse ($downloads as $download)
                        <p>
                            <a href="{{ asset($download->url) }}"
                                id="download_{{ $download->name }}">{{ $download->name }}</a>
                        </p>
                    @empty
                        <p><i>There's nothing here...</i></p>
                    @endforelse



                    {{-- <p>Are you hiring? Here you'll find everything you need.</p> --}}

                    {{-- <x-curricula :curricula="$curricula" /> --}}

                </article>

                <x-footer />

            </div>
        </div>

    </div>
@endsection
