<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projetcontroller extends Controller
{
    //function qui renvoie la page de création de nouveau projets
    public function projetnew(){
        return view('projets.nouveau');
    }
}
