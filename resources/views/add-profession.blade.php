@extends('layout.app')
@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Profession</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Profession</a></li>
                <!-- <li class="breadcrumb-item active"><a href="javascript:void(0);">Coordonnées</a></li> -->
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-xxl-4 col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Profession</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('add-profession')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @error('code')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Code</label>
                                    <input type="text" name="code" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            @error('designation')
                                <div class="alert alert-warning">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label">Désignation</label>
                                    <input type="text" name="designation" class="form-control">
                                </div>
                            </div>


                        </div>
                        <input type="submit" value="Valider" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-xxl-8 col-sm-8">
            <div class="card">
                <div class="card-header">


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Désignation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data )
                                <tr>
                                    <td>{{$data->code}}</td>
                                    <td>{{$data->designation}}</td>


                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
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
@endsection