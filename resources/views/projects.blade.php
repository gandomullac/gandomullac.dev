@extends('layout')

@push('styles')
    @vite('resources/css/projects.css')
@endpush

@push('scripts')
    {{-- <script src="https://unpkg.com/prismjs@1.20.0/components/prism-core.min.js"></script>
    <script src="https://unpkg.com/prismjs@1.20.0/plugins/autoloader/prism-autoloader.min.js" data-autoloader-path="https://unpkg.com/prismjs@1.20.0/components/"></script> --}}

    @vite('resources/js/table-of-contents.js')
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

                    @foreach ($projects->where('category', 1) as $project)
                        <div>

                            <h3 id="{{ $project->slug }}">{{ $project->title }}<a class="anchor"
                                    href="#{{ $project->slug }}">#</a></h3>

                            {!! $project->description !!}

                        </div>
                    @endforeach

                    <h2 id="open-source-projects">Learning / Open Source Projects<a class="anchor"
                            href="#open-source-projects">#</a></h2>

                    @foreach ($projects->where('category', 2) as $project)
                        <div>

                            <h3 id="{{ $project->slug }}">{{ $project->title }}<a class="anchor"
                                    href="#{{ $project->slug }}">#</a></h3>

                            {!! $project->description !!}

                        </div>
                    @endforeach

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

                            @foreach ($projects->where('category', 1) as $project)
                                <li><a href="#{{ $project->slug }}" class="active">{{ $project->subtitle }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li><a href="#open-source-projects" class="">Learning / Open Source Projects</a>
                        <ul>
                            @foreach ($projects->where('category', 2) as $project)
                                <li><a href="#{{ $project->slug }}" class="active">{{ $project->subtitle }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
