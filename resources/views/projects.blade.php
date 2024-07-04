@extends('layout')

@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/projects.css') }}" />
@endpush

@push('scripts')
    {{-- <script src="https://unpkg.com/prismjs@1.20.0/components/prism-core.min.js"></script>
    <script src="https://unpkg.com/prismjs@1.20.0/plugins/autoloader/prism-autoloader.min.js" data-autoloader-path="https://unpkg.com/prismjs@1.20.0/components/"></script> --}}
    <script src="{{ asset('js/table-of-contents.js') }}"></script>
@endpush

@section('content')

<div class="flex-wrapper">
    <div class="post__container">
        <div class="post">
            <header class="post__header">
                <h1 id="post__title">Projects</h1>

            </header>
            <article class="post__content">

                <p>Here are some the projects I worked on. I got a little better over time, so manage your expectations.
                </p>


                <h2 id="commercial-projects">Commercial Projects<a class="anchor" href="#commercial-projects">#</a></h2>

                <div>
                    <h3 id="avv-natati---feb-2023">Law firm website: avvocatoangelanatati.it - Feb 2023<a class="anchor"
                            href="#avv-natati---feb-2023">#</a></h3>
                    <p>Visit the project at <a href="https://www.avvocatoangelanatati.it" target="_blank"
                            rel="noreferrer noopener">www.avvocatoangelanatati.it</a>.</p>
                    <p><strong>Objective</strong>: Produrre il sito web per uno studio legale locale, sfruttando il
                        materiale dalla precedente iterazione prodotta da un altro sviluppatore. Il sito deve avere le
                        caratteristiche di un CMS, con prestazioni adeguate e un aspetto estetico accattivante.</p>
                    <p>
                        <strong>Context</strong>: Inizialmente, la volontà era di preservare il sito web già esistente,
                        prodotto con WordPress.
                        A causa della grave lentezza del portale, in accordo con l'Avvocato Natati, si è deciso di
                        produrre
                        il sito web da 0, migrando il più possibile dalla precedente istanza (post, media, contenuti
                        vari).
                        <br>
                        Il sito è stato costruito con un approccio tutto sommato agile, con frequenti colloqui con la
                        committente per valutare cambi nei requisiti e modifiche al prodotto prima del deployment.
                        <br> In prima istanza, i vari CRUD erano stati scritti da zero, tuttavia questo backend è stato
                        poi
                        sostituito con un admin panel scritto usando Filament: questa scelta, oltre a migliorare aspetti
                        legati
                        all'usabilità, ha permesso di migliorare sensibilmente il rilascio di feature aggiuntive.
                    </p>

                    <p><strong>Stack</strong>: Laravel, Blade, Filament, SQLite, Bootstrap 4</p>
                    <p><strong>Hosting</strong>: Owner's Aruba shared hosting service.</p>
                </div>

                <h2 id="open-source-projects">Learning / Open Source Projects<a class="anchor"
                        href="#open-source-projects">#</a>
                </h2>

                <div>
                    <h3 id="blog---jul-2024">My very own blog: gandomullac.dev - Feb 2023<a class="anchor"
                            href="#blog---jul-2024">#</a></h3>
                    <p>Visit the project at, well, you already are visiting it.</p>
                    <p><strong>Objective</strong>: Pubblicare un portfolio sufficientemente carino</p>
                    <p>
                        <strong>Context</strong>: Il mio precedente "blog" era un file html con una lista di progetti
                        scritta in 5 minuti. La volontà era scrivermi un portfolio per flexare doti da sviluppatore
                        quando invece da4 anni lavoro come sistemista, e allo stesso tempo affinare le mie doti con
                        Laravel,
                        CI CD e con soluzioni di hosting serverless e gratuite.

                        <br>
                        La precedente istanza, hostata presso Hetzner, aveva il vantaggio che mi permetteva di fornire
                        un ambiente di test ai clienti attraverso un dominio di terzo livello: questa funzionalità sarà
                        sostituita dal servizio offerto da <a href="https://expose.dev/">Expose</a>.
                    </p>

                    <p><strong>Stack</strong>: Laravel, Blade, Filament, SQLite, plain CSS & JS</p>
                    <p><strong>Hosting</strong>: Cloudflare pages</p>
                </div>

            </article>


            {{-- <div class="pagination">

                <a class="pagination__item" href="/uses/">
                    <span class="pagination__label">Previous Post</span>
                    <span class="pagination__title">Uses</span>
                </a>



                <a class="pagination__item" href="/learning/">
                    <span class="pagination__label">Next Post</span>
                    <span class="pagination__title">My Learnings</span>
                </a>

            </div> --}}


            <footer class="post__footer">



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

                <p>© gandomullac 2024</p>
            </footer>
        </div>
    </div>

    <div class="toc-container">
        <div class="toc-post-title">Projects</div>
        <nav id="TableOfContents">
            <ul>
                <li><a href="#commercial-projects" class="active">Commercial Projects</a>
                    <ul>
                        <li><a href="#avv-natati---feb-2023" class="active">avvocatoangelanatati.it - Feb 2023</a></li>
                    </ul>
                </li>
                <li><a href="#open-source-projects" class="">Learning / Open Source Projects</a>
                    <ul>
                        <li><a href="#blog---jul-2024" class="">gandomullac.dev - Jul 2024</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</div>

@endsection
