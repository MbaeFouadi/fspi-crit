@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Coordonnées</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonées</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Coordonées</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('identite.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('cin')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">CIN</label>
                                    <input type="text" name="cin" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('nom')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Nom</label>
                                    <input type="text" name="nom" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('prenom')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" name="prenom" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('email')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('telephone')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Téléphone-mobile</label>
                                    <input type="text" name="telephone" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('fax')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Fax</label>
                                    <input type="text" name="fax" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('langue')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Langue</label>
                                    <input type="text" name="langue" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('adresse')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" name="adresse" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('ile_id')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Île</label>
                                    <select name="ile_id" class="form-control" id="">
                                        <option value="">Sélectionner</option>
                                        @foreach ($iles as $ile)
                                        <option value="{{$ile->id}}">{{$ile->designation}}</option>
                                        @endforeach

                                    </select>
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
                                @error('grade_id')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Grade</label>
                                    <select name="grade_id" class="form-control" id="">
                                        <option value="">Sélectionner</option>
                                        @foreach ($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('profession_id')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Profession</label>
                                    <select name="profession_id" class="form-control" id="">
                                        <option value="">Sélectionner</option>
                                        @foreach ($professions as $profession)
                                        <option value="{{$profession->id}}">{{$profession->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('etablissement_id')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Etablissement de rattachement</label>
                                    <select name="etablissement_id" class="form-control" id="">
                                        <option value="">Sélectionner</option>
                                        @foreach ($etablissements as $etablissement)
                                        <option value="{{$etablissement->id}}">{{$etablissement->code}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('departement')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Département</label>
                                    <input type="text" name="departement" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('laboratoire')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Laboratoire d'affiliation</label>
                                    <input type="text" name="laboratoire" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('lien_google_scholar')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Lien Google scholar</label>
                                    <input type="text" name="lien_google_scholar" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('lien_research_gate')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Lien ResearchGate </label>
                                    <input type="text" name="lien_research_gate" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                @error('lien_orcid')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Lien ORCID</label>
                                    <input type="text" name="lien_orcid" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection