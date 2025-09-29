<?php

namespace App\Livewire\Auth;

use App\Models\User as UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';  // Field tambahan untuk aturan 'confirmed'


    public function rules()
    {
        return [
            'name' => 'required|min:3|max:25|string',
            'email' => 'required|email|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function register()
    {
        $this->validate();

        $user = UserModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        // Login pengguna secara otomatis setelah register
        Auth::login($user);

        return redirect('/dashboard');
    }

    #[Title('Register')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
