<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Borrow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    protected $item;

    public function __construct($item)
    {
        $this->item=$item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.borrow');
    }
}
