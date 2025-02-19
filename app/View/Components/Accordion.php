<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Accordion extends Component
{
    /**
     * Create a new component instance.
     */

    public $accordionItems;

    public function __construct(array $accordionItems)
    {
        $this->accordionItems = $accordionItems;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
