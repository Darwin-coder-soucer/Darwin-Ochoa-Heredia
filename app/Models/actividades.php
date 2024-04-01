<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['nombre', 'dia', 'hora'];

    public function animales()
    {
        return $this->belongsToMany('App\Animal');
    }
}