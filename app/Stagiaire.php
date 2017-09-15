<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $fillable = ['nom','prenom','niveau','telephone'];

    public function projet(){
        return $this->belongsTo('App\Projet');
    }

    //fonction de validation du formulaire d'ajout d'un stagiaire coté serveur
    public static function validate($input)
    {
        $rules = array
        (
            'projet_id'=>'int|required',
            'nom'=>'required|max:30',
            'prenom'=>'required|max:30',
            'niveau'=>'required|max:30',
            'telephone'=>'required|max:15',
            'sexe'=>'required|max:1'
        );
        $messages = array
        (

            'projet_id.required'=>'Le champs projet ne doit pas être vide.',
            'nom.required'=>'* Veuillez saisir le nom.',
            'prenom.required'=>'* Veuillez saisir le prenom.',
            'niveau.required'=>'* Veuillez saisir le niveau.',
            'telephone.required'=>'* Veuillez saisir le telephone.',
            'sexe.required'=>'* Veuillez choisir votre sexe.',
            'nom.max'=>'Le nom ne doit pas depasser 30 caractères.',
            'prenom.max'=>'Le prenom ne doit pas depasser 30 caractères.',
            'niveau.max'=>'Le niveau ne doit pas depasser 30 caractères.',
            'telephone.max'=>'Le telephone ne doit pas depasser 15 caractères.',
            'sexe.max'=>'Le sexe ne doit pas depasser 1 caractère.',

        );
        return \Validator::make($input,$rules,$messages);
    }
}
