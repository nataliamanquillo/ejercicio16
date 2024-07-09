<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function presidentes(){ 

        return $this->hasOne(presidente::class); 

    } 
    public function jugadores(){ 

        return $this->hasMany(jugador::class); 

    } 

    public function partidos(){ 

        return $this->belongsTo(partido::class); 

    } 
}
