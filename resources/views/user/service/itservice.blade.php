@extends('user/app')

@section('title','Information Technology| WNB Consultant')

@section('header')
<link rel="stylesheet" href="{{ asset('user/wnbcss/sub_services_page.css') }}">
@stop

@section('main-content')
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Information Technology</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Information Technology</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- End services Area -->
        <div class="single-services-page area-padding">
            <div class="container">
                <div class="row">
                 @include('user/service/sidebar')
                    <!-- Start service page -->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('user/img/service/4.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    
                                        <h3>Information Technology</h3>
                                    
                                    <p style="text-align: justify;">
                                        Developing Information Technology Application in suporting Toll Road Construction and Operations management, aiming for efficient and reliable workflows.
                                   
                                    <br><i class="fa fa-fw fa-arrows"></i> Toll Road Construction and Operations Support 
                                    <br><i class="fa fa-fw fa-arrows"></i> Fast and Reliable Online System
                                    <br><i class="fa fa-fw fa-arrows"></i> Taylor Made Application 
                                    <br><i class="fa fa-fw fa-arrows"></i> Trustworthy & Good Application Building
                                     </p>
                                </div>
                            </div>
                        </div>
                        <!-- end Row -->
                      
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End page Area -->
        @endsection