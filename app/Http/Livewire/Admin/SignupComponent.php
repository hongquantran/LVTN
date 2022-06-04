<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SignupComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.signup-component')->layout('layouts_admin.signin');
    }
}
