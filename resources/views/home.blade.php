@extends('layout')

@push('styles')
    @vite('resources/css/homepage.css')
@endPush

@push('scripts')
    @vite('resources/js/homepage.js')
@endpush

@section('content')
    <div class="splash-container">
        <div class="splash">

            <div>
                <h1>Hi, I'm <span id="typed-output">Claudio Gandini</span></h1>
            </div>



            <span class="handle">System administrator <span class="fancy">|</span> WebDev</span>

            <h2>
                Test Driven <span class="fancy-underline">Developer</span>
            </h2>


            @php
                $socialLinks = [
                    ['title' => 'Email', 'url' => 'mailto:gandomullac@gmail.com', 'icon' => 'email.svg'],
                    // ['title' => 'Twitter', 'url' => 'https://twitter.com/gandomullac', 'icon' => 'twitter.svg'],
                    ['title' => 'GitHub', 'url' => 'https://github.com/gandomullac', 'icon' => 'github.svg'],
                    [
                        'title' => 'LinkedIn',
                        'url' => 'https://www.linkedin.com/in/claudio-gandini-fe/',
                        'icon' => 'linkedin.svg',
                    ],
                ];
            @endphp

            <x-social-icon :links="$socialLinks" />



        </div>
    </div>
@endsection
