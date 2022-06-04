<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.user.home-component')->layout('layouts_user.base');
    }
}
