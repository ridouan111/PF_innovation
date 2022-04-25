<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategie extends Model
{
    use HasFactory;

    public function projets(){
        return $this->belongsToMany(Projet::class,'pivot_table_projet_strategie');
    }
}
