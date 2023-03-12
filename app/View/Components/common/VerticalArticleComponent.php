<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class VerticalArticleComponent extends Component
{
    public $articles;
    public string $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($articles, string $title)
    {
        $this->articles = $articles;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.vertical-article-component');
    }
}
