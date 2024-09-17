<?php

namespace App\Livewire;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Book;

class BookTable extends Component
{

    // public $listeners = [
    //     'book-has-been-registered' => 'loadBooks'
    // ];

    public $livros = [];

    // similar aos construtores das classe do PHP
    public function mount(){
        $this->loadBooks();
    }

    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        $this->loadBooks();
    }

    #[On('book-has-been-registered')]
    public function loadBooks() {
        $this->livros = Book::all();
    }

    public function edit($id){
        $this->dispatch('edit-button-has-been-clicked', $id);
    }

    public function render()
    {
        return view('livewire.book-table');
    }
}
