<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::paginate(5);
        return view('livewire.users');
    }
}
