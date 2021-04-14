<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    public function autores(){
        return $this->hasOne(Autor::class);
    }
    public function editoras(){
        return $this->hasOne(Editora::class);
    }
}
