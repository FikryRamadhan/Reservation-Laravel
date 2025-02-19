<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardHotel extends Component
{
    /**
     * Create a new component instance.
     */

    public $id;
    public $name;
    public $image;
    public $address;
    public $description;
    public $price;

    public function __construct($id, $name, $address, $price, $description, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-hotel');
    }
}
