<div class="social-icons">
    @foreach ($links as $link)
        <a class="social-icons__link" title="{{ $link['title'] }}" href="{{ $link['url'] }}" target="_blank"
            rel="me noopener" id="{{ $link['title'] }}_icon">
            {!! file_get_contents(public_path('svg/' . $link['icon'])) !!}
        </a>
    @endforeach
</div>
