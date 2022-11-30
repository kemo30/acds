<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackLayout extends Component
{
    public $titel ;
    public function __construct($titel)
    {
        $this->titel=$titel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('back.layout.layout');
    }
}
