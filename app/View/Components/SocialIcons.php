<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialIcons extends Component
{
    public array $socialLinks = [
        ['title' => 'Email', 'url' => 'mailto:gandomullac@gmail.com', 'icon' => 'email.svg'],
        // ['title' => 'Twitter', 'url' => 'https://twitter.com/gandomullac', 'icon' => 'twitter.svg'],
        ['title' => 'GitHub', 'url' => 'https://github.com/gandomullac', 'icon' => 'github.svg'],
        [
            'title' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/claudio-gandini-fe/',
            'icon' => 'linkedin.svg',
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.social-icons', ['socialLinks' => $this->socialLinks]);
    }
}
