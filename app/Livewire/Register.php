<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class Register extends Component
{
    use RegistersUsers;
    public $name;
    public $email;
    public $password;
 
 /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/posts';

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function register(){
       $user =  User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);


        Auth::login($user, $remember = true);


        return redirect()->route('posts.index');


    }
}
