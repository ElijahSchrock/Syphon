<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.Dashboard.dashboard-index');
    }
}
