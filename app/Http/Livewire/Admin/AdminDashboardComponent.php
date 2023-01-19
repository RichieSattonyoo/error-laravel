<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        // 34. add ->layout('layouts.base'); in folder app/http/Livewire -> AdminDashboardComponent.php
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
