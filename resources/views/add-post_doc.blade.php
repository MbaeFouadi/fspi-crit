@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Post-doc</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Post-doc</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Post-doc</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('post-doc.store')}}" method="post">
                        @csrf
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('specialite')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Spécialité</label>
                                    <input type="text" name="specialite" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('etablissement')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Etablissement</label>
                                    <input type="text" name="etablissement" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('pays')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Pays</label>
                                    <input type="text" name="pays" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('ville')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Ville</label>
                                    <input type="text" name="ville" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('annee')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Année</label>
                                    <input type="text" name="annee" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('thematique')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Thématique de Recherche </label>
                                    <input type="text" name="thematique" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">
                        <a href="{{route('axe-de-recherche.index')}}" class="btn btn-warning">Suivant</a>


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