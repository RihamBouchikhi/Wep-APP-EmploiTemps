<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disponibilité;
use App\Models\Groupe;
use App\Models\DispoGroupe;

class AvoirDispoGroupe extends Model
{
    use HasFactory;

    protected $table = 'avoir_dispo_groupes';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'id_Grp', 'id');
    }
    
    public function dispoGroupe()
    {
        return $this->belongsTo(DispoGroupe::class, 'id_DispoGrp', 'id');
    }
}