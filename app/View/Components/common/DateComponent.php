<?php

namespace App\View\Components\common;

use Carbon\Carbon;
use Illuminate\View\Component;

class DateComponent extends Component
{
    public string $date;
    public string $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $date, string $class = "")
    {
        $this->date = Carbon::parse($date)->format('l, d F Y');
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.date-component');
    }
}
