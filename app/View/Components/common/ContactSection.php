<?php

namespace App\View\Components\common;

use App\Models\Contact;
use Illuminate\View\Component;

class ContactSection extends Component
{
    public Contact $contact;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.contact-section');
    }
}
