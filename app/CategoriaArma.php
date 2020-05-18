<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaArma extends Model
{
    protected $fillable = [
        'jogo_id', 'categoria'
    ]; 

    public function jogo()
    {
        return $this->belongsTo(Jogos::class);
    }
}
