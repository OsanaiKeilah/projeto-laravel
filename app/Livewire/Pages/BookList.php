<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class BookList extends Component
{
    public $listeners = [
        'book-has-been-registered' => 'reloadBookList'
    ];

    public function reloadBookList() {
        // dd('go!');
    }

    public function render()
    {
        return view('livewire.pages.book-list');
    }
}
