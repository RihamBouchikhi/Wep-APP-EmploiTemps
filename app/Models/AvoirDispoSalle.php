<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disponibilité;
use App\Models\Salle;
use App\Models\DispoSalle;

class AvoirDispoSalle extends Model
{
    use HasFactory;

    protected $table = 'avoir_dispo_salles';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'id_Salle', 'id');
    }
    
    public function dispoSalle()
    {
        return $this->belongsTo(DispoSalle::class, 'id_DispoS', 'id');
    }
}