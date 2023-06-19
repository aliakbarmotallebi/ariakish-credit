<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Button extends Component
{
    public ?string $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = 'Submit')
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
