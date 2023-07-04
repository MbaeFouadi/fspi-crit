@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Productions scientifiques et technologiques</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Productions scientifiques et technologiques</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ouvrages</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('production-scientifique.store')}}" method="post">
                        @csrf
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            @error('reference')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Reference Complètes</label>

                                    <input type="text" name="reference" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            @error('niveau_etude_id')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Type</label>
                                    <select name="type_production_scientifique_id" class="form-control" id="">
                                        <option value="">Sélectionner</option>
                                        @foreach ($types as $type )
                                            <option value="{{$type->id}}">{{$type->designation}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">
                        <a href="{{route('fiches',$user->id)}}"  class="btn btn-success">Voir sa fiche</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Coordonnées</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Numero: {{$user->id}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>CIN: {{$user->cin}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Nom: {{$user->nom}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Prénom: {{$user->prenom}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Adresse: {{$user->adresse}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Téléphone: {{$user->telephone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection