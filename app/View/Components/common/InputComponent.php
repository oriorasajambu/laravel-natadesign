<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class InputComponent extends Component
{
    public string $class;
    public string $id;
    public string $label;
    public string $placeHolder;
    public string $type;
    public string $name;
    public string $isTextArea;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class = "",
        string $id,
        string $label,
        string $placeHolder,
        string $type,
        string $name,
        string $isTextArea = 'false',
    ) {
        $this->class = $class;
        $this->id = $id;
        $this->label = $label;
        $this->placeHolder = $placeHolder;
        $this->type = $type;
        $this->name = $name;
        $this->isTextArea = $isTextArea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.input-component');
    }
}
