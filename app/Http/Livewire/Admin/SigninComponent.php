<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SigninComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.signin-component')->layout('layouts_admin.signin');
    }
}
