<?php

namespace App\View\Components\home;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FaqSection extends Component
{
    public Collection $faqs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $faqs)
    {
        $this->faqs = $faqs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.faq-section');
    }
}
