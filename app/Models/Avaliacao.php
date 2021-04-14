<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
    public function livros(){
        return $this->belongsTo(Livro::class);
    }
}
