<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    protected $fillable = [
        'nombre_heroe', 'nombre_real', 'foto', 'info'
    ];
}
