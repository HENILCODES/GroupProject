<?php

namespace App\View\Components\header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class desktop extends Component
{
    /**
     * Create a new component instance.
     */
    public $temp;
    public function __construct()
    {
        $this->temp = "Ss";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header.desktop');
    }
}
