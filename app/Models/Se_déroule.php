<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;
use App\Models\Déroulement;

class Se_déroule extends Model
{
    use HasFactory;

    protected $table = 'se_déroules';

    protected $fillable = [
        'id_Dispo',
        'id_Déroulement',
    ];

    public function disponibilite()
    {
        return $this->belongsTo(Disponibilité::class, 'id_Dispo');
    }

    public function déroulement()
    {
        return $this->belongsTo(Déroulement::class, 'id_Déroulement');
    }
}
