<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function livros(){
        return $this->hasMany(Livro::class);
    }
    public function autores(){
        return $this->hasOne(Autor::class);
    }
}
