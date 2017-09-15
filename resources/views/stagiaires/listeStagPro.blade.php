@extends('template')
@section('title') Liste - stagiaire @endsection
@section('page_head') LES STAGIAIRES @endsection
@section('champ1')
    <h2 class="card-inside-title">Liste des stagiaires</h2>
    <ul class="header-dropdown m-r--5">
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);">Action</a></li>
                <li><a href="javascript:void(0);">Another action</a></li>
                <li><a href="javascript:void(0);">Something else here</a></li>
            </ul>
        </li>
    </ul>
@endsection
@section('body')
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
            <thead>
            <tr>
                <th>Projet</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Niveau</th>
                <th>Téléphone</th>
                <th>Sexe</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Projet</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Niveau</th>
                <th>Téléphone</th>
                <th>Sexe</th>
            </tr>
            </tfoot>
            <tbody>
            {{--{{dd($stagiaires->projet->libelle)}}--}}
                @foreach($stagiaires as $stagiaire)
                    <tr>
                        <td>{{$stagiaire->projet->libelle}}</td>
                        <td>{{$stagiaire->nom}}</td>
                        <td>{{$stagiaire->prenom}}</td>
                        <td>{{$stagiaire->niveau}}</td>
                        <td>{{$stagiaire->telephone}}</td>
                        <td>{{$stagiaire->sexe}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
