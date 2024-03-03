<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;
use App\Models\Etudiant;
use App\Models\DispoEt;

class AvoirDispoEtd extends Model
{
    use HasFactory;

    protected $table = 'avoir_dispo_etds';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_Etudiant', 'id');
    }
    
    public function dispoEtd()
    {
        return $this->belongsTo(DispoEt::class, 'id_DispoEtd', 'id');
    }
}