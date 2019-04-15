@extends('user/app')

@section('title','About Us | WNB Consultant')


@section('main-content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        @foreach ($abouts as $about)
                        <h3>{{$about->title}}</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>{{$about->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- about-area start -->
<div class="about-page-area area-padding">
    <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-image">
                <img src="{{asset('user/img/about/profil1.png')}}" alt="">
            </div>
        </div>
        <!-- column end -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="about-content">

                <h4>Back<span class="color">Ground </span></h4>
                
                <p>{!!   $about->body   !!}</p>
                
                <div class="row mar-row">
                    <!-- End single page -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-menu">
                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="single-service.html#p-view-1" role="tab" data-toggle="tab">Vision</a></li>
                            <li><a href="single-service.html#p-view-2" role="tab" data-toggle="tab">Mission</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h5>Vision</h5>
                                    <p>To be a Sound and Professional consultant to play an active role in contributing to the development of Indonesia Toll Roads.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner">
                                <div class="event-content head-team">
                                    <h5>Mission</h5>
                                    <p><i class="fa fa-fw fa-arrows"></i> To provide and faciltate professional and skilled experts in highway industry developments.
                                    <br><i class="fa fa-fw fa-arrows"></i> To become reliable partner on toll roads network developments
                                    <br><i class="fa fa-fw fa-arrows"></i>To manage and develop reliable human resources.
                                    <br><i class="fa fa-fw fa-arrows"></i>Performing a business with the application of Good Governance principles.
                                    <br><i class="fa fa-fw fa-arrows"></i>Providing valuable returns to service users, business owner and community at large </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end column -->
            </div>
            @endforeach
            <!-- end Row -->
        </div>
    </div>
</div>
</div>
</div>







@endsection