<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class Login extends Component
{
    use AuthenticatesUsers;

    public $email;
    public $password;
 
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

     /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/posts';



    public function render()
    {
        return view('livewire.login');
    }

    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/posts');
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid email or password.');
        }
    }
}
