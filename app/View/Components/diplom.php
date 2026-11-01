<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class diplom extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $family, public string $short, public string $rate)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.diplom');
    }
}
