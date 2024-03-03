<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Formation;

class Groupe extends Model
{
    use HasFactory;

    protected $table = 'groupes';

    protected $fillable = [
        'NomGrp',
        'CapaciteGrp',
        'NbrEtudiants',
        'TypeFormation',
        'id_Formation',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'id_Formation');
    }
}