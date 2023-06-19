<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Modals\Modal;
use App\Models\Appliance;
use Livewire\Component;

class ModalApplianceUser extends Modal
{
    public $data;

    private Appliance $appliances = null;

    protected $listeners = [
        'show' => 'showModal'
    ];

    public function showModal($id)
    {
        $this->appliances = Appliance::find($id);
        $this->show();
    }

    public function render()
    {
        return view('livewire.modal.modal-appliance-user', [
            'appliances' => $this->appliances
        ]);
    }
}
