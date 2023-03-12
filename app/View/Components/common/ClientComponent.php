<?php

namespace App\View\Components\common;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ClientComponent extends Component
{
    public Collection $clients;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $clients)
    {
        $this->clients = $clients;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.client-component');
    }
}
