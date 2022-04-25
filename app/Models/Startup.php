<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    public function entrepreneur(){
        return $this->belongsTo(User::class);
    }

    public function projet(){
        return $this->hasOne(Projet::class);
    }


    public function documents(){
        return $this->morphToMany(Document::class,'documentable');
    }
}
