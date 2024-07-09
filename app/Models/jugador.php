<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public function equipos(){ 

        return $this->belongsTo(equipo::class); 

    } 


    public function gols(){ 

        return $this->hasMany(gol::class); 

    } 
}
