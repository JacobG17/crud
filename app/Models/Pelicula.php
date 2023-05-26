<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'reseña',
        'director',
        'genero',
        'fecha_de_estreno',
    ]; 
}
