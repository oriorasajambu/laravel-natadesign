<?php

namespace App\View\Components\common;

use App\Models\Workflows;
use Illuminate\View\Component;

class AccordionComponent extends Component
{
    public string $class;
    public string $title;
    public string $content;
    public int $position;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $class, string $title, string $content, int $position = -1)
    {
        $this->class = $class;
        $this->title = $title;
        $this->content = $content;
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.accordion-component');
    }
}
