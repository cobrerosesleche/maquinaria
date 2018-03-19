<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getDescripion()
    {
         return $this->descripcion;
    }
}
