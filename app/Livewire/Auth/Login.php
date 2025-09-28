<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public string $email = '';
    public string $password = '';

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            // Arahkan ke halaman dashboard
            return redirect()->intended('/dashboard');
        }

        // Tampilkan pesan error jika gagal login
          $this->addError('email', 'Kredensial yang diberikan tidak cocok dengan data kami.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
