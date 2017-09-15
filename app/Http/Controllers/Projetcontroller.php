<?php

namespace App\Http\Controllers;

use App\General;
use App\Projet;
use App\Stagiaire;
use Illuminate\Http\Request;

class Projetcontroller extends Controller
{
    //function qui renvoie la page de création de nouveau projets
    public function projetnew(){
        return view('projets.nouveau');
    }
    //function qui renvoie la liste des projets
    public function projetList(){
        $projets = Projet::all();
        return view('projets.liste',['projets'=>$projets]);
    }
    //function qui renvoie la page de création de nouveaux stagiaire
    public function stagenew(){
        $projets = Projet::all();
        return view('stagiaires.nouveau',['projets'=>$projets]);
    }
    //function qui renvoie la liste des stagiaires
    public function stageList(){
        $stag = Stagiaire::all();
        return view('stagiaires.liste',['stagiaires'=>$stag]);
    }
    //function qui renvoie la liste des stagiaires
    public function liste(){
        $stag = Stagiaire::with('projet')->get();
        return view('stagiaires.listeStagPro',['stagiaires'=>$stag]);
    }

    //fonction permettant d'enregistrer un nouveau projet
    public function AjouterProjet(Request $request)
    {
        $validation = Projet::validate($request->all());
        if($validation->passes())
        {
            //on récupère la date saisie par l'utilisateur avec $request->get('date_deb')
            //on converti en format sql acceptable en bdd en notre methode dateFormatSql() dans le modèl General
            //en suite on la formate en Y-m-d
            $datedeb = date('Y-m-d',strtotime(General::dateFormatSql($request->get('date_deb'))));
            $datedfin = date('Y-m-d',strtotime(General::dateFormatSql($request->get('date_fin'))));

            $projet = new Projet;
            $projet->libelle = $request->get('libelle');
            $projet->datedeb = $datedeb;
            $projet->datefin = $datedfin;
            $projet->budget = $request->get('budget');
            
            //enregistrement et rédirection avec message de succès
            $projet->save();
            return back()->with('reussite','Vous avez ajouté un nouveau projet');

        }
        return redirect('')->withErrors($validation)->withInput();
    }

    //fonction permettant d'ajouter un projet à un nouveau stagiaire
    public function AjouterStagiaire(Request $request)
    {
        $validation = Stagiaire::validate($request->all());
        if($validation->passes())
        {
            $stag = new Stagiaire;
            $stag->projet_id = $request->get('projet_id');
            $stag->nom = $request->get('nom');
            $stag->prenom = $request->get('prenom');
            $stag->niveau = $request->get('niveau');
            $stag->telephone = $request->get('telephone');
            $stag->sexe = $request->get('sexe');

            //enregistrement et rédirection avec message de succès
            $stag->save();
            return back()->with('reussite','Vous avez assigné un projet à un nouvel stagiaire');

        }
        return back()->withErrors($validation)->withInput();
    }
}
