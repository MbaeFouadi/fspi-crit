@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Etablissement</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Etablissement</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h5 class="card-title">E</h5> -->
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Profession</th>
                                <th>UDC</th>
                                <th>CNDRS</th>
                                <th>INRAPE</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Maître Assistant</th>
                                <td>128</td>
                                <td>146</td>
                                <td>179</td>
                                <td class="text-red">5000</td>
                            </tr>
                            <tr>
                                <th>Maître de conférences</th>
                                <td>128</td>
                                <td>146</td>
                                <td>179</td>
                                <td class="text-red">5000</td>
                            </tr>
                            <tr>
                                <th>Professeur</th>
                                <td>128</td>
                                <td>146</td>
                                <td>179</td>
                                <td class="text-red">5000</td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection