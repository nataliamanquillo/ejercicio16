<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gol extends Model
{
    use HasFactory;

    public function jugadors(){ 

        return $this->belongsTo(jugador::class); 

    } 

    public function partidos(){ 

        return $this->belongsTo(partido::class); 

    } 
}
