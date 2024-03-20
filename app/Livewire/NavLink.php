<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class NavLink extends Component
{
    public function render()
    {

        $userId = Auth::id();

        return view('livewire.nav-link', [
            'UserRole' => User::find($userId)->role
        ]);
    }
}
