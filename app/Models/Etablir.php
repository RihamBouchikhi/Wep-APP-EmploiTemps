<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\DisponibilitéCommune;
use App\Models\Séance;


class Etablir extends Model
{
    use HasFactory;

    protected $table = 'etablirs';

    protected $fillable = [
        'id_DispoCmn',
        'id_Seance',
    ];

    public function disponibiliteCommune()
    {
        return $this->belongsTo(DisponibilitéCommune::class, 'id_DispoCmn');
    }

    public function seance()
    {
        return $this->belongsTo(Séance::class, 'id_Seance');
    }
}
