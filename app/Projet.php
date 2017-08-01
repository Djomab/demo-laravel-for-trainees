<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['libelle','datedeb','datefin','budget'];

    public function stagiaires(){
        return $this->hasMany('App\Stagiaire');
    }
}
