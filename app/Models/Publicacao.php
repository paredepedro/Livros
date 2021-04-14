<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
    public function livros(){
        return $this->belongsTo(Livro::class);
    }
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
