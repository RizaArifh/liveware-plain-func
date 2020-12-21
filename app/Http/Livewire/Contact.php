<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

public function updated($field){
    $this->validateOnly($field,[
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|digits_between:10,13',
        'msg'=>'required|min:10'
    ]);
}

public function submitForm(){
    $this->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|digits_between:10,13',
        'msg'=>'required|min:10'
    ]);
    dd($this->name,$this->email,$this->phone,$this->msg);
}

    public function render()
    {
        return view('livewire.contact');
    }
}
