@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Recherche</h4>
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
        <div class="col-md-2"></div>
        <div class="col-xl-8 col-xxl-8 col-sm-12">
            <div class="card">
                <!-- <div class="card-header">
                    <h5 class="card-title">Recherche une formation</h5>
                </div> -->
                <div class="card-body">
                    <form action="{{route('store-recherche-axe-recherche')}}" method="post">
                        @csrf
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <div class="row">
                            
                            <div class="col-md-2"></div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                @error('numero')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Numéro</label>
                                    <input type="search" name="search" class="form-control">
                                </div>
                                <input type="submit" value="Valider" class="btn btn-primary">

                            </div>
                            <div class="col-md-2"></div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>

    </div>

</div>
@endsection