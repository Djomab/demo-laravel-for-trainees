<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $fillable = ['nom','prenom','niveau','telephone'];

    public function projet(){
        return $this->belongsTo('App\Projet');
    }
}
