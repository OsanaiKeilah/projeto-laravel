<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Book;
use Livewire\Form;

class BookRegisterForm extends Form
{
    public $id;
    public $ano;
    public $autor;
    public $titulo;

    public function save() {
        $data['titulo'] = $this->titulo;
        $data['autor'] = $this->autor;
        $data['ano'] = $this->ano;
        Book::updateOrCreate(['id' => $this->id], $data);
        $this->dispatch('book-has-been-registered');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $this->id = $book->id;
        $this->ano = $book->ano;
        $this->autor = $book->autor;
        $this->titulo = $book->titulo;
    }
}
