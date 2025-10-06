<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User as UserModel;

class Index extends Component
{

    #[Title('Users List')]
    public function render()
    {
        return view('livewire.users.index', [
            'users' => UserModel::all()
        ]);
    }
}
