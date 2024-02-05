@extends('layouts.app') @section('content') 
<div class="masthead-followup row m-0 text-center lead"> 
    


        
    
    <div class="col-12 col-md-6 p-3 text-left"> 
        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">show1</p>
                                <h6 class="pro_duct">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">show2</p>
                                <h6 class="cus_tomer">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">show3</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">show4</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->    
        </div>
        
        
        <div class="col-12 col-md-3 p-3 text-left"> 
            <h3 class="title" x-text="lpor"></h3> 
            <ul> 
                <li><a x-bind:href='sslugu1' x-text='sslug1' class="text-danger"></a></li>
                <li><a x-bind:href='sslugu2' x-text='sslug2' class="text-danger"></a></li>
                <li><a x-bind:href='sslugu3' x-text='sslug3' class="text-danger"></a></li>
                <li><a x-bind:href='sslugu4' x-text='sslug4' class="text-danger"></a></li>
            </ul> <h3 class="title" x-text="oss"></h3> <ul> <li><a x-bind:href='wbde' x-text='wbd' class="text-danger"></a></li>
            <li><a x-bind:href='shop' x-text='shp' class="text-danger"></a></li><li><a x-bind:href='resto' x-text='rst' class="text-danger"></a></li>
            <li><a x-bind:href='andro' x-text='and' class="text-danger"></a></li>
        </ul>
         <h3 class="title" x-text="opo"></h3> 
         <ul> 
            <li><a class="text-danger" x-bind:href='kasirs' x-text='kasir'></a></li></ul> 
        </div>
    </div>
     @endsection