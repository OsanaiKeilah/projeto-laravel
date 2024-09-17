<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{

    public $caminho = ['Page 5', 'Page 6'];

    public function render()
    {
        return view('livewire.pages.home');
    }
}
