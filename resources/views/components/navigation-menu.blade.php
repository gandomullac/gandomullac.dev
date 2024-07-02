<nav class="nav" id="navigation">
    <ul class="nav__list">
        @foreach ($links as $link)
            <li>
                <a href="{{ route($link['route']) }}">{{ $link['label'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
