<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCountComonent extends Component
{
    protected $listeners = ['refreshComponent'=> '$refresh'];
    public function render()
    {
        return view('livewire.cart-count-comonent');
    }
}
