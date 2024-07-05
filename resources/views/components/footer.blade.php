<footer class="post__footer">



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

    <p>© gandomullac 2024</p>
</footer>
