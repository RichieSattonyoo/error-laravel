<?php

namespace App\Http\Livewire\Sprovider;

use Livewire\Component;

class SproviderDashboardComponent extends Component
{
    public function render()
    {
        // 36. add ->layout('layouts.base'); in folder app/http/Livewire -> SproviderDashboardComponent.php
        return view('livewire.sprovider.sprovider-dashboard-component')->layout('layouts.base');
    }
}
