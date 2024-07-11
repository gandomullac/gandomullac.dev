<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Head extends Component
{
    public function __construct(public $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.head');
    }
}
