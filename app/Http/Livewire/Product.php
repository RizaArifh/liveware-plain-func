<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $infos=[];

    public function mount(){
        $this->infos[]="application is mountiong . . . .";
    }

    public function hydrate(){
        $this->infos[]="application is hydrating . . . .";

    }

    public function updating($name,$value){
        $this->infos[]="application is updating . . . .";

    }
    public function updated($name,$value){
        $this->infos[]="application is updated . . . .";
    }

    public function updatingName(){
        $this->infos[]="application is updating name . . . .";
    }

    public function updatedName(){
        $this->infos[]="application is updated name . . . .";
    }

    public function render()
    {
        return view('livewire.product');
    }
}
