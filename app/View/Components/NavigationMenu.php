<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $links) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navigation-menu');
    }
}
