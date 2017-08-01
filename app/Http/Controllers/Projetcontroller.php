<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projetcontroller extends Controller
{
    //function qui renvoie la page de création de nouveau projets
    public function projetnew(){
        return view('projets.nouveau');
    }
    //function qui renvoie la liste des projets
    public function projetList(){
        return view('projets.liste');
    }
    //function qui renvoie la page de création de nouveaux stagiaire
    public function stagenew(){
        return view('stagiaires.nouveau');
    }
    //function qui renvoie la liste des stagiaires
    public function stageList(){
        return view('stagiaires.liste');
    }
}
