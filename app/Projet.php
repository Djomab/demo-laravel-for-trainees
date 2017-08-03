<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['libelle','datedeb','datefin','budget'];

    public function stagiaires(){
        return $this->hasMany('App\Stagiaire');
    }

    //fonction de validation du formulaire coté serveur
    public static function validate($input)
    {
        $rules = array
        (
            'libelle'=>'required|max:30',
            'date_deb'=>'date|required',
            'date_fin'=>'date|required',
            'budget'=>'int|required'
        );
        $messages = array
        (

            'libelle.max'=>'Le libelle ne doit pas depasser 30 caractères. Merci',
            'date_deb.required'=>'* Veuillez choisir une date de début. Merci',
            'date_deb.date'=>'Le format spécifié n\'est pas un format de date correcte',
            'date_fin.required'=>'* Veuillez choisir une date de fin. Merci',
            'date_fin.date'=>'Le format spécifié n\'est pas un format de date correcte',
            'budget.required'=>'* Veuillez saisir le budget du projet. Merci',
            'budget.int'=>'Le budget doit un nombre',

        );
        return \Validator::make($input,$rules,$messages);
    }
}
