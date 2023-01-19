<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        // 11. add ->layout('layouts.base'); in folder app/http/Livewire -> HomeComponent.php
        return view('livewire.home-component')->layout('layouts.base');
    }
}
