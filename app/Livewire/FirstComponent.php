<?php

namespace App\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{

    public int $count = 1;
    public function countUp(){
        $this->count++;
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
