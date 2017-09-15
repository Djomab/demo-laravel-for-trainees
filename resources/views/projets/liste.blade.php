@extends('template')
@section('title') Liste - projets @endsection
@section('page_head') LES PROJETS @endsection
@section('champ1')
    <h2 class="card-inside-title">Liste des projets</h2>
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
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Budget</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Projet</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Budget</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($projets as $projet)
                <tr>
                    <td>{{$projet->libelle}}</td>
                    <td>{{$projet->datedeb}}</td>
                    <td>{{$projet->datefin}}</td>
                    <td>{{$projet->budget}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
