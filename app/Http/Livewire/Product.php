<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $infos = [];
    public $title;
    public $name;

    public function mount(){
        $this->infos[] = 'Mounting';
    }

    public function hydrate(){
        $this->infos[] = 'Hydrating';
    }

    public function updating($name,$value){
        $this->infos[] = 'Updaing';
    }

    public function updated($name,$value){
        $this->infos[] = 'Updated';
    }

    public function updatingName(){
        $this->infos[] = 'Updating Name';
    }

    public function updatedName(){
        $this->infos[] = 'Updated Name';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
