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
                    <p><strong>Objective</strong>: To produce the website for a local law firm, utilizing the material
                        from the previous iteration produced by another developer. The website must have the
                        characteristics of a CMS, with adequate performance and an attractive aesthetic appearance.</p>
                    <p>
                        <strong>Context</strong>: Initially, the intention was to preserve the existing website,
                        produced with WordPress.
                        Due to the severe slowness of the portal, in agreement with Lawyer Natati, it was decided to
                        produce
                        the website from scratch, migrating as much as possible from the previous instance (posts,
                        media, various contents).
                        <br>
                        The site was built with a relatively agile approach, with frequent meetings with the client to
                        assess changes in requirements and modifications to the product before deployment.
                        <br> Initially, the various CRUD operations were written from scratch, but this backend was
                        later
                        replaced with an admin panel written using Filament: this choice, besides improving usability
                        aspects, allowed for a significant improvement in the release of additional features.
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
                    <p><strong>Objective</strong>: Publish a half decent portfolio</p>
                    <p>
                        <strong>Context</strong>: My previous "blog" was an HTML file with a list of projects
                        written in 5 minutes. The intention was to write a portfolio to showcase my developer skills
                        even though I've been working as a systems administrator for 4 years, and at the same time
                        refine my skills with
                        Laravel,
                        CI CD, and with serverless and free hosting solutions.

                        <br>
                        The previous instance, hosted on Hetzner, had the advantage of allowing me to provide
                        a testing environment for clients through a third-level domain: this functionality will be
                        replaced by the service offered by <a href="https://expose.dev/">Expose</a>.
                    </p>


                    <p><strong>Stack</strong>: Laravel, Blade, Filament, SQLite, plain CSS & JS</p>
                    <p><strong>Hosting</strong>: Cloudflare pages ASAP, right now Hetzner's shared hosting</p>
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


            <x-footer />

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
