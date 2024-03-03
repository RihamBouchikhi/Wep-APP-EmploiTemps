<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Salle;
use App\Models\Séance;

class A_eu_lieu extends Model
{
    use HasFactory;

    protected $table = 'a_eu_lieus';

    protected $fillable = [
        'id_Salle',
        'id_Seance',
    ];

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'id_Salle');
    }

    public function seance()
    {
        return $this->belongsTo(Séance::class, 'id_Seance');
    }
}
