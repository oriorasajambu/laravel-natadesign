<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class ProjectSection extends Component
{
    public string $class;
    public string $classTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class = "",
        string $classTitle = "",
    )
    {
        $this->class = $class;
        $this->classTitle = $classTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.project-section');
    }
}
