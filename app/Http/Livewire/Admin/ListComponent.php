<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.list-component')->layout('layouts_admin.base');
    }
}
