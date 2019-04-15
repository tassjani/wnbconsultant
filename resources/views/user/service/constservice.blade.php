@extends('user/app')

@section('title','Construction| WNB Consultant')

@section('header')
<link rel="stylesheet" href="{{ asset('user/wnbcss/sub_services_page.css') }}">
<link rel="stylesheet" href="{{ asset('user/wnbcss/price_area.css') }}">
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
                        <h3>Construction Management</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li >Construction Management </li>

                       
                        
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
            <!-- Start service page -->
            <div class="single-services-page area-padding">
                <div class="container">
                    <div class="row">
                        @include('user/service/sidebar')

                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{asset('user/img/service/6.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    
                                        <h3>Construction Management</h3>
                                    
                                    <p>
                                        The company focused its line of service on toll roads consultation in regards to asisting Goverment Agencies, Coorporations and institutions on toll road construction process, which covers the following :
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- end Row -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End page Area -->
<div class="pricing-page-area fix area-padding">
    <div class="container">
        <div class="section-headline text-center">

            <h3>Contruction stage</h3>


       </div>
         <p style="text-align: justify;">
          The company focused its line of service on toll roads consultation in regards to asisting Goverment Agencies, Coorporations and institutions on toll road construction process, which covers the following :
         </p>
                    <div class="row mar-row">
                    <!-- End single page -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="tab-menu">
                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                            <li class="active" ><a href="single-service.html#p-view-1" role="tab" data-toggle="tab">Pre Stage</a></li>
                            <li><a href="single-service.html#p-view-2" role="tab" data-toggle="tab">Construction</a></li>
                            <li><a href="single-service.html#p-view-3" role="tab" data-toggle="tab">Post Stage</a></li>
                        </ul>
                    </div>
                      
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner">
                                <div class="event-content head-team" style="text-align: justify;">
                                    <h5>Pre Construction Stage</h5>
                                    <p><i class="fa fa-fw fa-arrows"></i> To evaluate and/or compose tollroads investment programs.
                                    <br><i class="fa fa-fw fa-arrows"></i> Undertake studies on traffic management financial feasibility, highway roads investment, environmental effect analysis, basic engineering plans and operation and maintenance plans.
                                    <br><i class="fa fa-fw fa-arrows"></i> Compose final tollroads engineering plans
                                    <br><i class="fa fa-fw fa-arrows"></i> Prepare project financial schedule, project prposal and memorandum to acquire financing for the projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h5>Construction Stage</h5>
                                    <p><i class="fa fa-fw fa-arrows"></i> Monitor administration and accounting duties for the project as well as managing resource available during the construction in accordance to the specified budget and quality.
                                    <br><i class="fa fa-fw fa-arrows"></i> Carry out the Construction Management practicies by coordinating the activities of constractors, sub-constractors, supplier and the construction consultant in order to achive maximum cost efficiency, time effectiveness and optmization of quality.</p>


                                </div>
                            </div>
                        </div>
                            <div class="tab-pane" id="p-view-3">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h5>Post Construction Stage</h5>
                                    <p><i class="fa fa-fw fa-arrows"></i> Conduct training for keys employees, business planner,operation and maintenance officers and all other employees relevant to the project development.
                                    <br><i class="fa fa-fw fa-arrows"></i> Porvide assistance for the management team in perforing duties that include feasibility study, operation performance evaluation, other project development and human resource evaluation.
                                    <br><i class="fa fa-fw fa-arrows"></i> Assist the management team in executing program as well as maintaining highway roads either by using conservative system or the Performance Based Maintenance Contract(PMBC)
                                </p>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end column -->
            </div>
        
            </div>
        </div>

@endsection