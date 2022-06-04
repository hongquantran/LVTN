<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ForgotpasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.forgotpassword-component')->layout('layouts_admin.signin');
    }
}
