@extends('layout.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-success overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title text-white">Total UDC</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>{{$udc}}</h5>
                    </div>
                    <!-- <div class="card-body text-center mt-4 p-0">
                        <div class="ico-sparkline">
                            <div id="spark-bar-2"></div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-secondary overflow-hidden">
                    <div class="card-header pb-3">
                        <h3 class="card-title text-white">Total CNDRS</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> {{$cndrs}}</h5>
                    </div>
                    <!-- <div class="card-body p-0 mt-2">
                        <div class="px-4"><span class="bar1" data-peity='{ "fill": ["rgb(0, 0, 128)", "rgb(7, 135, 234)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-danger overflow-hidden">
                    <div class="card-header pb-3">
                        <h3 class="card-title text-white">Total INRAPE</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> {{$inrap}}</h5>
                    </div>
                    <!-- <div class="card-body p-0 mt-1">
                        <span class="peity-line-2" data-width="100%">7,6,8,7,3,8,3,3,6,5,9,2,8</span>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-primary overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title text-white">Total enseignants</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>{{$cndrs+$udc+$inrap}}</h5>
                    </div>
                    <!-- <div class="card-body text-center mt-3">
                        <div class="ico-sparkline">
                            <div id="sparkline12"></div>
                        </div>
                    </div> -->
                </div>
            </div>
           
          
        </div>
    </div>

</div>