<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class ArticleSection extends Component
{
    public string $class;
    public string $classTitle;
    public string $title;
    public string $pathName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class = "",
        string $classTitle = "",
        string $title = "",
        string $pathName = "",
    ) {
        $this->class = $class;
        $this->classTitle = $classTitle;
        $this->title = $title;
        $this->pathName = $pathName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.article-section');
    }
}
