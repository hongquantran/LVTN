<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class RegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.user.register-component')->layout('layouts_user.base');
    }
}
