@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Fiche</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Fiche</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-1 col-xxl-1 col-sm-1">
        </div>
        <div class="col-xl-10 col-xxl-10 col-sm-10">
            <div class="card">
                <div class="card-header"></div>


                <div class="row ">
                    <div class="col-md-1"></div>

                    <div class="col-md-2"><img src="{{asset('assets/images/entete/Minist.jpg')}}" width="100px" height="100px" alt=""></div>
                    <div class="col-md-2"><img src="{{asset('assets/images/entete/comores.png')}}" width="100px" height="100px" alt=""></div>
                    <div class="col-md-2"><img src="{{asset('assets/images/entete/udc.jpg')}}" width="100px" height="100px" alt=""></div>
                    <div class="col-md-2"><img src="{{asset('assets/images/entete/inrap.jpg')}}" width="100px" height="100px" alt=""></div>
                    <div class="col-md-2"><img src="{{asset('assets/images/entete/cndrs.jpg')}}" width="100px" height="100px" alt=""></div>
                    <div class="col-md-1"></div>

                </div>


                <div class="card-body">
                    <div>
                        <h6 class="text-center text-bold text-italic" style="color:#0F056B; font-style:italic">PROJET FSPI - Appui à la Recherche aux Comores <br>
                            CRIT - Comores Recherche, Innovation et Technologies
                        </h6>
                    </div>
                </div>

                <div>
                    <h5 class="text-center text-bold" style="color: #005774;">Base de Données de la Recherche aux Comores
                    </h5>
                </div>

                <div class="container">
                    <div>
                        <table class="table table-bordered  text-bold">
                            <thead>
                                <tr>

                                    <th colspan="5" class="text-center table-info">Références et Coordonnées</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center table-warning">Références</th>
                                    <td colspan="4">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Nom : <strong>{{$data->nom}}</strong> </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Prénom: <strong>{{$data->prenom}}</strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Profession: <strong> {{$data->profession}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Grade ou Titre universitaire : <strong> {{$data->grade}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Pays de résidence: <strong></strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Ville: <strong>{{$data->ville}}</strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>île: <strong> {{$data->ile}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Etablissement de rattachement: <strong> {{$data->etablissement}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Département: <strong>{{$data->departement}}</strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Laboratoire d’affiliation : <strong>{{$data->laboratoire}}</strong></h5>
                                            </div>
                                        </div>

                                    </td>

                                    </td>

                                </tr>
                                <tr>
                                    <th class="text-center table-danger">Coordonnées</th>
                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Adresse: <strong> {{$data->adresse}} </strong></h5>
                                            </div>

                                            <div class="col-md-12">
                                                <h5>Téléphone mobile : <strong> {{$data->telephone}} </strong></h5>
                                            </div>
                                            <!-- <div class="col-md-12">
                                                <h5>Faxe :</h5>
                                            </div> -->
                                            <div class="col-md-12">
                                                <h5>E-mail: <strong> {{$data->email}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Lien Google scholar : <strong> {{$data->lien_google_scholar}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Lien ResearchGate : <strong> {{$data->lien_research_gate}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Lien ORCID : <strong> {{$data->lien_orcid}} </strong></h5>
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                @if(count($formations) > 0)
                                <tr>
                                    <th colspan="5" class="text-center table-info">Formation supérieure</th>
                                </tr>
                                @foreach ($formations as $formation)


                                <tr>

                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Diplôme: <strong> {{$formation->diplome}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Spécialité: <strong> {{$formation->specialite}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Établissement d’obtention : <strong> {{$formation->etablissement}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Pays : <strong> {{$formation->pays}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Ville : <strong> {{$formation->ville}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Date d’obtention : <strong> {{$formation->date}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Thématique de Recherche : <strong> {{$formation->thematique}} </strong></h5>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                <tr>
                                    <th colspan="5" class="text-center table-info">Langues</th>
                                </tr>
                                <tr>

                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>*****************************************</h5>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @if (count($post_docs) > 0)
                                <tr>
                                    <th colspan="5" class="text-center table-info">Post-doc</th>
                                </tr>
                                @foreach ($post_docs as $post_doc)
                                <tr>

                                    <td colspan="4">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <h5>Spécialité: <strong> {{$post_doc->specialite}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Établissement d’obtention : <strong> {{$post_doc->etablissement}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Pays : <strong> {{$post_doc->pays}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Ville : <strong> {{$post_doc->ville}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Année : <strong> {{$post_doc->annee}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Thématique de Recherche : <strong> {{$post_doc->thematique}} </strong></h5>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                                @if (count($axes) > 0)


                                <tr>
                                    <th colspan="5" class="text-center table-info">Axe de Recherche</th>
                                </tr>
                                @foreach ($axes as $axe )
                                <tr>

                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Recherche sur: <strong> {{$axe->recherche}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Mots-clés: <strong> {{$axe->mot_cle}} </strong></h5>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                @if (count($projets) > 0)
                                <tr>
                                    <th colspan="5" class="text-center table-info">Projets tuteurés/Mémoires de fin d’études encadrés</th>
                                </tr>
                                @foreach ($projets as $projet )
                                <tr>

                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Niveau d’études : <strong> {{$projet->designation}} </strong> </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Année: <strong> {{$projet->annee}} </strong></h5>
                                            </div>

                                            <div class="col-md-12">
                                                <h5>Thématique: <strong> {{$projet->thematique}} </strong></h5>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                                @if (count($actions) > 0)
                                <tr>
                                    <th colspan="5" class="text-center table-info">Actions de Recherche auprès d’Organisme privé/publique</th>
                                </tr>
                                @foreach ($actions as $action )
                                <tr>

                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>Action : <strong> {{$action->action}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Mots-clés: <strong> {{$action->mot_cle}} </strong></h5>
                                            </div>

                                            <div class="col-md-12">
                                                <h5>Organisme: <strong> {{$action->organisme}} </strong></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Durée: <strong> {{$action->duree}} </strong></h5>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                <tr>
                                    <th colspan="5" class="text-center table-info">Productions scientifiques et technologiques</th>
                                </tr>
                                @if (count($communications) > 0)
                                <tr>
                                    <td>Communications</td>

                                    <td colspan="3">

                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($communications as $communication )
                                                <h5>Références complètes : <strong>{{$communication->reference}}</strong> </h5>

                                                @endforeach

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @if (count($articles) > 0)
                                <tr>
                                    <td>Articles</td>

                                    <td colspan="3">

                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($articles as $article )
                                                <h5>Références complètes : <strong>{{$article->reference}}</strong> </h5>

                                                @endforeach

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @if (count($ouvrages) > 0)
                                <tr>
                                    <td>Ouvrages</td>

                                    <td colspan="3">

                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($ouvrages as $ouvrage )
                                                <h5>Références complètes : <strong>{{$ouvrage->reference}}</strong> </h5>

                                                @endforeach

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-1 col-xxl-1 col-sm-1">
        </div>
    </div>

</div>
@endsection