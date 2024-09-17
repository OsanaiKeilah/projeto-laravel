<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public $caminho = ['Page 1', 'Page 2', 'Page 3'];
    public $livros = ['PHP', 'Java', 'C#', 'Python'];

    public function filterBooks($text) {
        dd($text);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
