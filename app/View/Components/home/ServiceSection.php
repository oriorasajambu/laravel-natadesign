<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class ServiceSection extends Component
{
    public $services;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($availableService)
    {
        $this->services = $availableService;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.service-section');
    }
}
