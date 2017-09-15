@extends('template')
@section('title') nouveau - stagiaire @endsection

@section('page_head')
    @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @elseif(session('reussite'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>{{session('reussite')}}</h4>
        </div>
    @endif
    AJOUT STAGIAIRE
@endsection
@section('champ1')
    <h2 class="card-inside-title">Enregistrer nouveau stagiaire ici</h2>
    <div class="row clearfix">
        <form action="{{url('ajout_stagiaire')}}" autocomplete="off" method="post">
            {{csrf_field()}}
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="nom" class="form-control">
                        <label class="form-label">Nom</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="prenom" class="form-control">
                        <label class="form-label">Prenom</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="niveau" class="form-control">
                        <label class="form-label">Niveau</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="tel" name="telephone" class="form-control">
                        <label class="form-label">Téléphone</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <select name="sexe" class="form-control show-tick">
                    <option value="">-- Sexe --</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="col-sm-12">
                <select name="projet_id" class="form-control show-tick">
                    <option value="">-- Choisir un projet --</option>
                    @foreach($projets as $projet)
                        <option value="{{$projet->id}}">{{$projet->libelle}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-info pull-right m-t-15 waves-effect">AJOUTER</button>
        </form>
    </div>
@endsection
