@extends('user/app')

@section('title','Advisory| WNB Consultant')

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
                                <h3>Advisory</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Advisory</li>
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
                                        <img src="{{asset('user/img/service/5.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    
                                        <h3>Advisory</h3>
                                    
                                    <p>Wiranusantara Bumi (WNB) Tollroad Consultant comprises construction experts who understand the dynamic risks that construction project teams face. Our project advisory services focus on the processes required to effectively and efficiently plan and manage projects, improve transparency and accountability among stakeholders, control cost, and avoid, minimize, or resolve disputes during the construction project lifecycle.</p>
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