<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    protected $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(CategoriaArma::class);
    
}
}
