<?php

namespace App\View\Components\common;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ProjectComponent extends Component
{
    public $albums;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $albums,
    ) {
        $this->albums = $albums;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.project-component');
    }
}
