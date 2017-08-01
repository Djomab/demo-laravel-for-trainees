@extends('template')
@section('title') nouveau - stagiaire @endsection
@section('page_head') AJOUT STAGIAIRE @endsection
@section('champ1')
    <h2 class="card-inside-title">Enregistrer nouveau stagiaire ici</h2>
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control">
                    <label class="form-label">Nom</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control">
                    <label class="form-label">Prenom</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control">
                    <label class="form-label">Niveau</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="tel" class="form-control">
                    <label class="form-label">Téléphone</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
                <select class="form-control show-tick">
                    <option value="">-- Sexe --</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
        </div>
        <button type="button" class="btn btn-info pull-right m-t-15 waves-effect">AJOUTER</button>
    </div>
@endsection
