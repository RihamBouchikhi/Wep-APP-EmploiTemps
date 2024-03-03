<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;
use App\Models\DisponibilitéCommune;

class Définir extends Model
{
    use HasFactory;

    protected $table = 'définirs';

    protected $fillable = [
        'id_Dispo',
        'id_DispoCmn',
    ];

    public function disponibilité()
    {
        return $this->belongsTo(Disponibilité::class, 'id_Dispo');
    }

    public function disponibilitéCommune()
    {
        return $this->belongsTo(DisponibilitéCommune::class, 'id_DispoCmn');
    }
}
