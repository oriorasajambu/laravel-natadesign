<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class ModalLightShow extends Component
{
    public $album;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($album)
    {
        $this->album = $album;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.modal-light-show');
    }
}
