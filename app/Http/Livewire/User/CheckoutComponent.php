<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.user.checkout-component')->layout('layouts_user.base');
    }
}
