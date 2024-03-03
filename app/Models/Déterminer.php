<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DispoEt;
use App\Models\DispoGroupe;

class Déterminer extends Model
{
    use HasFactory;

    protected $table = 'déterminers';

    protected $fillable = [
        'id_DispoEtd',
        'id_DispoGrp',
    ];

    public function dispoEt()
    {
        return $this->belongsTo(DispoEt::class, 'id_DispoEtd');
    }

    public function dispoGroupe()
    {
        return $this->belongsTo(DispoGroupe::class, 'id_DispoGrp');
    }
}