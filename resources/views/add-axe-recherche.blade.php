@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Axes de Recherche</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Axes de Recherche</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-xxl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Axes de Recherche</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('axe-de-recherche.store')}}" method="post">
                        @csrf
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        @if(isset($messages))
                            <div class="alert alert-success">
                                {{ $messages }}
                            </div>
                            @endif
                        <input type="hidden" value="{{$user->id}}" name="id">
                        <input type="hidden" value="{{$statut}}" name="statut">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            @error('recherche')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Recherche sur</label>
                                    <input type="text" name="recherche" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            @error('cle')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Mots clés</label>
                                    <input type="text" name="cle" class="form-control" required>
                                </div>
                            </div>
                         
                           
                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">
                        <a href="{{route('projet_tutore.index')}}" class="btn btn-warning">Suivant</a>

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