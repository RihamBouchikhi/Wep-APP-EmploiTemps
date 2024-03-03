<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;
use App\Models\Enseignant;
use App\Models\DispoEns;

class AvoirDispoEns extends Model
{
    use HasFactory;

    protected $table = 'avoir_dispo_ens';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'id_Ens', 'id');
    }
    
    public function dispoEns()
    {
        return $this->belongsTo(DispoEns::class, 'id_DispoEns', 'id');
    }
}