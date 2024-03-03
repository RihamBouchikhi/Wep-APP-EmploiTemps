<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Déroulement extends Model
{
    use HasFactory;

    protected $table = 'déroulements';

    protected $fillable = [
        'Date_Début',
        'Date_Fin',
    ];

    protected $dates = [
        'Date_Début',
        'Date_Fin',
    ];

}
