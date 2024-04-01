<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    protected $fillable = ['nombre', 'especialidad'];

    public function animales()
    {
        return $this->belongsToMany('App\Animal');
    }
}
