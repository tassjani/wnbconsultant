@extends('user/app')

@section('title','Construction| WNB Consultant')


@section('main-content')
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Construction Management</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Construction Management</li>
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
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="page-head-left">
                           <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="left-menu">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start service page -->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('user/img/project/52.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="single-service.html#">
                                        <h3>Construction Management</h3>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
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