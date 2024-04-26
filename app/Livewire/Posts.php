<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Posts extends Component
{
    use LivewireAlert;
    public $posts = [];
    public function mount()
    {
        // $this->alert('warning', 'Please enter password', [
        //     'showConfirmButton' => true,
        //     'confirmButtonText' => 'Submit',
        //     'onConfirmed' => 'confirmed',
        //     'input' => 'password',
        //     'inputValidator' => '(value) => new Promise((resolve) => '.
        //         '  resolve('.
        //         '    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,}$/.test(value) ?'.
        //         '    undefined : "Error in password"'.
        //         '  )'.
        //         ')',    
        //     'allowOutsideClick' => false,
        //     'timer' => null
        // ]);
        $posts = Post::with('videos','comments')->get();
        $this->posts = $posts; 
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
