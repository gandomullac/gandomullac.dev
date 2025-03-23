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

            <span class="handle">Coach <span class="fancy">|</span> R&D <span class="fancy">|</span> DevOps</span>

            <h2>
                Multirole fighter <span class="fancy-underline">Dev</span>
            </h2>


            <x-social-icons />


        </div>
    </div>
@endsection
