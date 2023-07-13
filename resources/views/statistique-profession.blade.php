<?php
use Illuminate\Support\Facades\DB;

 ?> 
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
                                <th>Non affiliés</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @php
                                $udc=DB::table("identites")
                                ->where("etablissement_id",1)
                                ->where("profession_id",$data->id)
                                ->count();

                                $cndrs=DB::table("identites")
                                ->where("etablissement_id",2)
                                ->where("profession_id",$data->id)
                                ->count();

                                $inrape=DB::table("identites")
                                ->where("etablissement_id",2)
                                ->where("profession_id",$data->id)
                                ->count();

                                $non=DB::table("identites")
                                ->where("etablissement_id",100000)
                                ->where("profession_id",$data->id)
                                ->count();
                            @endphp
                            <tr>
                                <th>{{$data->designation}}</th>
                                <td>{{$udc}}</td>
                                <td>{{$cndrs}}</td>
                                <td>{{$inrape}}</td>
                                <td>{{$non}}</td>
                                <td class="text-red">{{$udc+$cndrs+$non}}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection