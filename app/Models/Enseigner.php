<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Enseignant;
use App\Models\Formation;

class Enseigner extends Model
{
    use HasFactory;

    protected $table = 'enseigners';
    
    protected $fillable = [
        // Ajoutez les attributs remplissables de votre modèle
    ];
    
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'Enseignant_id', 'id');
    }
    
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'Formation_id', 'id');
    }
}