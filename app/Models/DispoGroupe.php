<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Time;


use App\Models\Disponibilité;

class DispoGroupe extends Model
{
    use HasFactory;

    protected $table = 'dispo_groupes';

    protected $fillable = [
        'Jour_DispoGrp',
        'DispoGrp_HeureDébut_Int1',
        'DispoGrp_HeureFin_Int1',
      
        'DispoGrp_HeureDébut_Int2',
        'DispoGrp_HeureFin_Int2',
        
        'DispoGrp_HeureDébut_Int3',
        'DispoGrp_HeureFin_Int3',
    ];
  

    
    
    protected $casts = [
        'DispoGrp_HeureDébut_Int1' => 'string',
        'DispoGrp_HeureFin_Int1' => 'string',
        'DispoGrp_HeureDébut_Int2' => 'string',
        'DispoGrp_HeureFin_Int2' => 'string',
        'DispoGrp_HeureDébut_Int3' => 'string',
        'DispoGrp_HeureFin_Int3' => 'string',
    ]; 

    
}