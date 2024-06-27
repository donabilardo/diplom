<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainMenu extends Component
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function render()
    {
        return $this->view('components.menus.main-menu');
    }
}
