<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{   
    public $value;
    public $num1,$num2;
    public $sum;

    public function message($value){
        $this->value = $value;
    }   

    public function getSun(){
        $this->sum = $this->num1 + $this->num2; 
    }

    public function render()
    {
        return view('livewire.action');
    }
}
