<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['nombre', 'especie_id', 'recinto_id'];

    public function especie()
    {
        return $this->belongsTo('App\Especie');
    }

    public function recinto()
    {
        return $this->belongsTo('App\Recinto');
    }

    public function cuidadores()
    {
        return $this->belongsToMany('App\Cuidador');
    }

    public function actividades()
    {
        return $this->belongsToMany('App\Actividad');
    }
}

