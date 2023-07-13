@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Recherches</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Recherche</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-xxl-2 col-sm-2">
        </div>
        <div class="col-xl-8 col-xxl-8 col-sm-8">
            <div class="card">
                <div class="card-header">
                    <!-- <h5 class="card-title">Recherche</h5> -->
                </div>
                <div class="card-body">
                    <form action="{{route('store-recherche-liste')}}" method="post">
                        @csrf
                        @if (session()->has('error'))
                            <div class="alert alert-warning">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">Iles</label>
                                    <select name="ile" class="form-control" id="">
                                        <option value="">Séléctionner</option>
                                        @foreach ($iles as $ile )
                                        <option value="{{$ile->id}}">{{$ile->designation}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">Etablissements</label>
                                    <select name="etablissement" class="form-control" id="">
                                        <option value="">Séléctionner</option>
                                        @foreach ($etablissements as $etablissement )
                                        <option value="{{$etablissement->id}}">{{$etablissement->code}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">Professiosn</label>
                                    <select class="form-control" name="profession" id="">

                                        <option value="">Sélectionner</option>
                                        @foreach ($professions as $profession )
                                        <option value="{{$profession->id}}">{{$profession->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-xxl-2 col-sm-2">
        </div>
    </div>

</div>
@endsection