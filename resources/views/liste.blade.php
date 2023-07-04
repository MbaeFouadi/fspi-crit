@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Liste</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste</a></li>

            </ol>
        </div>
    </div>

    <div class="row">
        <!-- <div class="col-lg-12">
            <ul class="nav nav-pills mb-3">
                <li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
                <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
            </ul>
        </div> -->
        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste</h4>
                            <!-- <a href="{{route('add-user')}}" class="btn btn-primary">+ Un nouveau utilisateur</a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>

                                            <th>Numero</th>
                                            <th>CIN</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Etablissement</th>
                                            <th>Profession</th>
                                            <th>Fiche</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach  ($datas as $data)
                                            
                                       
                                        <tr>

                                            <td>{{$data->id}}</td>
                                            <td>{{$data->cin}}</td>
                                            <td>{{$data->nom}}</td>
                                            <td>{{$data->prenom}}</td>
                                            <td>{{$data->etablissement}}</td>
                                            <td>{{$data->profession}}</td>
                                            <td>
                                                <a href="{{route('fiches',$data->id)}}" class="btn btn-sm btn-primary"><i class="la la-file-text"></i></a>
                                             
                                            </td>
                                        </tr>

                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection