<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class ArticleComponent extends Component
{
    public $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $articles,
    )
    {
        $this->articles = $articles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.article-component');
    }
}
