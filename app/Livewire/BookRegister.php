<?php

namespace App\Livewire;
use App\Livewire\Forms\BookRegisterForm;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Book;

class BookRegister extends Component
{
    public BookRegisterForm $form;

    public function save() 
    {
        $this->form->save();
    }

    #[On('edit-button-has-been-clicked')]
    public function edit($id)
    {
        $this->form->edit($id);
    }

    public function render()
    {
        return view('livewire.book-register');
    }
}
