<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    public function entrepreneur(){
        return $this->hasOne(User::class,'entrepreneur_id');
    }

    public function invesstisseur(){
        return $this->hasOne(User::class,'invesstiseur_id');
    }



    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function virement(){
        return $this->hasOne(Virement::class);
    }
}
