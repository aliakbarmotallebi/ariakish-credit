<?php

namespace App\Http\Livewire\Modal;

use App\Http\Livewire\Modal\Modal;
use App\Models\User;
use Livewire\Component;

class ModalUserInfo extends Modal
{
    public $data;

    private $user = null;

    protected $listeners = [
        'show' => 'showModal'
    ];

    public function showModal($id)
    {
        $this->user = User::find($id);
        $this->show();
    }

    public function render()
    {
        return view('livewire.modal.modal-user-info', [
            'user' => $this->user
        ]);
    }
}
