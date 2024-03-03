<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisponibilitéCommune extends Model
{
    use HasFactory;

    protected $table = 'disponibilité_communes';

    protected $fillable = [
        'Jour_DC',

        'Dc_HeureDébut_Int1',
        'Dc_HeureFin_Int1',

        'Dc_HeureDébut_Int2',
        'Dc_HeureFin_Int2',

        'Dc_HeureDébut_Int3',
        'Dc_HeureFin_Int3',
    ];

}
