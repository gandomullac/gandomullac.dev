<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Curricula extends Component
{
    public function __construct(public $curricula)
    {
        $this->curricula = $curricula;
    }

    public function render(): View|Closure|string
    {
        return view('components.curricula');
    }
}
