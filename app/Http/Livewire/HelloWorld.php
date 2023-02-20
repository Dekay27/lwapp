<?php

namespace App\Http\Livewire;

use Livewire\Component;


class HelloWorld extends Component
{

    public $name = "Yeshua"; 
    public $exclaim = false;
    public $greeting = "Hello";

    public function resetName()
    {
        $this->name = "Yeshua";
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
