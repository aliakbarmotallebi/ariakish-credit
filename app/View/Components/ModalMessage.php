<?php

namespace App\View\Components;

use App\Http\Livewire\Modal\Modal;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalMessage extends Modal
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-message');
    }
}
