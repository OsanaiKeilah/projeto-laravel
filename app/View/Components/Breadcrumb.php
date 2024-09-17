<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    
    public $titulo = 'Tópicos Especiais I';
    public $lista = ['Home', 'Layout', 'Fixed Layout', 'Extern', 'Public', 'Large', 'Individual'];

    public function __construct($titulo, $lista)
    {
        $this->titulo = $titulo;
        $this->lista = $lista;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb');
    }
}
