<?php

namespace App\View\Components\Panel\Commons;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $user = 0;

    public $appliance = 0;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->user = User::where('status', 'STATUS_PENDING')->count();
        $this->appliance = User::where('status', 'STATUS_PENDING')->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('panel.commons.sidebar');
    }
}
