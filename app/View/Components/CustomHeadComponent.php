<?php

namespace App\View\Components;

use App\Models\Seo;
use Illuminate\View\Component;

class CustomHeadComponent extends Component
{
    public Seo $seo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Seo $seo)
    {
        $this->seo = $seo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.custom-head-component');
    }
}
