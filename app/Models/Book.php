<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // campos que serão inseridos via formulário no bd
    protected $fillable = ['id', 'titulo', 'autor', 'ano'];
    
}
