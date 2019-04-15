@extends('user/app')

@section('title','Services| WNB Consultant')


@section('main-content')

<!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                
                                <h3>All Services</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
     
        <!-- Welcome service area End -->
        <!-- Start Service area -->
		<div class="services-area area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
					        
						    <h3>Our Services</h3>
						    
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="services-all">
                    	<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
						   <div class="single-services">
								<a class="service-images" href="{{route('construction')}}"><i class="flaticon-graph"></i></a>
								<div class="service-content">
									<h4><a href="{{route('construction')}}"> construction </a></h4>
									<br>
                                    <a class="service-btn" href="{{route('construction')}}">read more</a>
								</div>
							</div>
						</div>
					    <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
								<a class="service-images" href="{{route('advisory')}}"><i class="flaticon-graph-1"></i></a>
								<div class="service-content">
									<h4><a href="{{route('advisory')}}"> Advisory </a></h4>
									<br>
                                    <a class="service-btn" href="{{route('advisory')}}">read more</a>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
							   <a class="service-images" href="{{route('it_service')}}"><i class="flaticon-diagram"></i></a>
								<div class="service-content">
									<h4><a href="{{route('it_service')}}">Information Technology </a></h4>
									<br>
									<a class="service-btn" href="{{route('it_service')}}">read more</a>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>
		</div>
		<!-- End Service area -->
 
        @endsection