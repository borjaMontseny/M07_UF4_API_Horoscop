<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscop extends Model
{
    use HasFactory;

    // Atributs del model que es poden omplir massivament
    protected $fillable = [
        'date',    // Data de l'horòscop
        'lang',    // Idioma de l'horòscop
        'sign',    // Signe zodiacal
        'time',    // Hora de l'horòscop
        'phrase',  // Frase de l'horòscop
    ];
}