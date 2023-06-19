<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class File extends Component
{
    public ?string $name;

    public ?string $label;

    public ?string $placeholder;

    public bool $required = false;

    public ?string $value;

    public bool $readonly = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = '',
        $name = '',
        $placeholder = '',
        $value = '',
        $required = false,
        $readonly = false
    ) {
        $this->label = $label;

        $this->name = $name;

        $this->placeholder = $placeholder;

        $this->required = $required;

        $this->value = $value;

        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.file');
    }
}
