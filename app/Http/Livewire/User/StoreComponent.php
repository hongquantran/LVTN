<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class StoreComponent extends Component
{
    public function render()
    {
        return view('livewire.user.store-component')->layout('layouts_user.base');
    }
}
