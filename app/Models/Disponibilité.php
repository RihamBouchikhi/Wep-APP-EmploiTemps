<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Administrateur;
use App\Models\DispoEt;
use App\Models\DispoSalle;
use App\Models\DispoEns;



class Disponibilité extends Model
{
    use HasFactory;

    protected $table = 'disponibilités';

    protected $fillable = [
        'Jour_Dispo',
        'Disp_HeureDébut_Int1',
        'Disp_HeureFin_Int1',
        'Disp_HeureDébut_Int2',
        'Disp_HeureFin_Int2',
        'Disp_HeureDébut_Int3',
        'Disp_HeureFin_Int3',
        'id_Admin',
    ];

   

   
}
