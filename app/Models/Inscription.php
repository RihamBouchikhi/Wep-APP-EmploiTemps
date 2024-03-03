<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Groupe;


class Inscription extends Model
{
    use HasFactory;

    protected $table = 'inscriptions';

    protected $fillable = [
        'Date_Inscription',
        'id_Etudiant',
        'id_Formation',
        'id_Groupe',
    ];

    protected $dates = [
        'Date_Inscription',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_Etudiant');
    }
 /*
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'id_Formation');
    }  

    */

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'id_Groupe');
    }
    
}