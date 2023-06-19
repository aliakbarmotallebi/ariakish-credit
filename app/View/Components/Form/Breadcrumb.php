<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public ?string $label = '';

    public ?string $route = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label = '', string $route = '')
    {
        $this->label = $label;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.breadcrumb');
    }
}
