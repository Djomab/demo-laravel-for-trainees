@extends('template')
@section('title') Nouveau - projet @endsection
@section('page_head') AJOUT PROJET @endsection
@section('champ1')
    <h2 class="card-inside-title">Enregistrer nouveau projet ici</h2>
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control">
                    <label class="form-label">Libelle du projet</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="datepicker form-control">
                    <label class="form-label">Date debut</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="datepicker form-control">
                    <label class="form-label">Date fin</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="tel" class="form-control">
                    <label class="form-label">Budget</label>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-info pull-right m-t-15 waves-effect">AJOUTER</button>
    </div>
@endsection
