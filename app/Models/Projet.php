<?php

namespace App\Models;

use App\Models\Secteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    public function startup(){
        return $this->belongsTo(startup::class);
    }

    public function secteurs(){
        return $this->belongsToMany(Secteur::class,'pivot_table_projet_secteur');
    }

    public function typeLeves(){
        return $this->belongsToMany(TypeLeve::class,'pivot_table_projet_typeleve');
    }

    public function strategies(){
        return $this->belongsToMany(Strategie::class,'pivot_table_projet_strategie');
    }

    public function bussines_model(){
        return $this->hasOne(BussinesModel::class);
    }

    public function images(){
        return $this->hasMany(ProjetImages::class);
    }

    public function documents(){
        return $this->morphToMany(Document::class,'documentable');
    }

}
