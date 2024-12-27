<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public $title;
    public $items;

    public function __construct($title, $items)
    {
        $this->title = $title;
        $this->items = $items;
    }

    public function render()
    {
        return view('components.dropdown');
    }
}
