<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class MottoSection extends Component
{
    public string $class;
    public string $headline;
    public string $title;
    public string $content;
    public string $isActive;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class,
        string $headline,
        string $title,
        string $content,
        bool $isActive = false,
    ) {
        $this->class = $class;
        $this->headline = $headline;
        $this->title = $title;
        $this->content = $content;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.motto-section');
    }
}
