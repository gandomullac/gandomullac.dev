@extends('layout')

@push('styles')
    @vite('resources/css/homepage.css')
@endPush

@push('scripts')
    @javascript('nicknames', $nicknames)

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


            <x-social-icons />


        </div>
    </div>
@endsection
