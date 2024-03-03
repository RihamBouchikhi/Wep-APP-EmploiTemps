<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Groupe;

class Séance extends Model
{
    use HasFactory;


    protected $table = 'séances';

    protected $fillable = [
        'JourSeance',
        'HeureDebutSeance',
        'HeureFinSeance',
        'id_Groupe',
    ];

    protected $dates = [
        'HeureDebutSeance',
        'HeureFinSeance',
    ];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'id_Groupe');
    }
    
}
