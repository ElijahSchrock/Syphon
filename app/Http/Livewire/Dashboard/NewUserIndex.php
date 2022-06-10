<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use Livewire\Component;

class NewUserIndex extends Component
{
    public function render()
    {
        return view('livewire.Dashboard.new-user-index');
    }

    public function toProfile()
    {
        return redirect()->route('profile.show');
    }
}