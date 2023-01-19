<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class CustomerDashboardComponent extends Component
{
    public function render()
    {
        // 35. add ->layout('layouts.base'); in folder app/http/Livewire -> CustomerDashboardComponent.php
        return view('livewire.customer.customer-dashboard-component')->layout('layouts.base');
    }
}
