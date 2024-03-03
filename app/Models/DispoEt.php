<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;

class DispoEt extends Model
{
    use HasFactory;

    protected $table = 'dispo_ets';

    protected $fillable = [];

    //public $timestamps = true;

    
    public function disponibilite()
    {
        return $this->belongsTo(Disponibilité::class, 'id_DispoEtudiant', 'id');
    }
}