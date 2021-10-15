<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AllUser extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::SimplePaginate(5);
        return view('livewire.all-user',[
            'users' => $users
        ]);
    }
}
