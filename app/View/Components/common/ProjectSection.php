<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class ProjectSection extends Component
{
    public string $class;
    public string $classTitle;
    public string $showButton;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class = "",
        string $classTitle = "",
        string $showButton = "false",
    )
    {
        $this->class = $class;
        $this->classTitle = $classTitle;
        $this->showButton = $showButton;
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
