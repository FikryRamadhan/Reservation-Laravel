<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardService extends Component
{
    /**
     * Create a new component instance.
     */

    public $name, $icon;

    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-service');
    }
}
