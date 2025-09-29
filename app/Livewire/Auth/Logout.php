<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        // Arahkan ke halaman login
        return redirect('/login');
    }
    
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
