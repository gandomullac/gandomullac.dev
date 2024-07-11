@isset($curricula)
    <h2 id="work-experiences">Curriculum Vitae<a class="anchor" href="#work-experiences">#</a></h2>
    <p>Are you hiring? Here you'll find everything you need.</p>


    @foreach ($curricula as $cv)
        <p>
            <a href="{{ $cv->url }}" id="curriculum_{{ $cv->language }}">{{ $cv->nameWithLanguage }}</a>
        </p>
    @endforeach
@endisset
