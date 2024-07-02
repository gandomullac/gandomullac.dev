<div class="social-icons">
    @foreach ($links as $link)
        <a class="social-icons__link" title="{{ $link['title'] }}" href="{{ $link['url'] }}" target="_blank" rel="me noopener">
            <div class="social-icons__icon" style="background-image: url('{{ asset('svg/' . $link['icon']) }}')"></div>
        </a>
    @endforeach
</div>
