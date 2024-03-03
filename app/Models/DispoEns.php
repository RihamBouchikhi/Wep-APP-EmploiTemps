<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;

class DispoEns extends Model
{
    use HasFactory;

    protected $table = 'dispo_ens';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function disponibilite()
    {
        return $this->belongsTo(Disponibilité::class, 'id_DispoEnseignant', 'id');
    }

    
}