<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    public function entrepreneur(){
        return $this->belongsTo(User::class,'entrepreneur_id');
    }

    public function invesstisseur(){
        return $this->belongsTo(User::class,'invesstisseur_id');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
    
}
