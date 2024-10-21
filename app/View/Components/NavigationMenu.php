<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationMenu extends Component
{
    public array $links = [
        ['label' => 'about', 'route' => 'about'],
        ['label' => 'home', 'route' => 'home'],
        ['label' => 'projects', 'route' => 'projects'],
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
        return view('components.navigation-menu', ['link' => $this->links]);
    }
}
