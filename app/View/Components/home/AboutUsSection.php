<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class AboutUsSection extends Component
{
    public string $headline;
    public string $title;
    public string $content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $headline, string $title, string $content)
    {
        $this->headline = $headline;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.about-us-section');
    }
}
