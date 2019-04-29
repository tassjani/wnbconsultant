@extends('user/app')



@section('main-content')

	<!-- Start Slider Area -->
        <div class="intro-area intro-area-2">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{asset('user/img/slider/1.jpg')}}" alt="">
                    </div>
                    <div class="slider-content-master">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                            <div class="layer-master1" >
                                                <h1 class="title1"><span class="color">WE</span></h1>
                                            </div>
                                            <div class="layer-master2">
                                                <h1 class="title2">NAVIGATE</h1>
                                            </div>
                                            <div class="layer-master3">
                                                <h1 class="title2">THE</h1>
                                            </div>
                                            <div class="layer-master4">
                                                <h1 class="title2">BENEFITS</h1>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{asset('user/img/slider/2.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">World digital resolutions for <span class="color">business leaders</span></h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <!-- <div class="layer-1-1">
                                                <p>A consulting or consultancy firm is a business of one or more experts that provides professional advice.</p>
                                            </div> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->


        <!-- about-area start -->
           

<div class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12" style="top: -50px !important; left: -200px !important;">
                        <div class="about-image"  style=" width: 800px; height: 450px;" >
                            <img src="{{asset('user/img/about/profil1.gif')}}"  alt="">
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                            
                            <h4>Welcome to WNB consultant.</h4>
                            <p>
                                The development of toll roads in Indonesia often encounter many issues, such as business planning, financing, land acquisition and construction. PT Wira Nusantara Bumi was established base on the need to participate the development of toll roads in Indonesia Our company was founded in 1990, which started out as Engineering Consulting firm but since then have solely focused on toll roads development consultancy
                            </p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->


        <!-- Welcome service area start -->
            <div class="welcome-area area-padding">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h6>Our Service</h6>
                            <h4>Tollroad development  resolutions for<span class="color"> contructor</span></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img" >
                                <img src="{{asset('user/img/service/6.jpg')}}" style="width: 400px; height: 200px;" alt="">
                                
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Construction Management</h4>
                                    <p>professional service that uses specialized, project management techniques.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <img src="{{asset('user/img/background/h2.jpg')}}" style="width: 400px; height: 200px;" alt="">
                                
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Advisory</h4>
                                    <p>Focus on the processes required to effectively and efficiently plan and manage projects.</p>
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <img src="{{asset('user/img/background/4.jpg')}}" style="width: 400px; height: 200px;" alt="">
                                
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Information Technology</h4>
                                    <p>Developing Information Technology Application in developing tollroads contruction and operation.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                </div>
            </div>
        </div>
        <!-- Welcome service area End -->
        
     
        
        <!--News Area Start-->
        <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h6> WNB in the News </h6>
                            <h3>Latest News</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        @foreach ($news as $ns)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="{{route('news')}}">
                                        <img src="{{asset('user/img/1.jpg')}}" alt="">
                                    </a>
                                </div>
                                
                                <div class="blog-content">
                                 <div class="blog-title">
                                     <div class="blog-meta">
                                        <span class="date-type">
                                         {{$ns->created_at->diffForHumans()}}
                                     </span>

                                 </div>
                                 <a href="{{route('news')}}">
                                    <h4> {{ $ns->title }} </h4>
                                </a>
                            </div>
                            <div class="blog-text">
                                <p>
                                    {!!str_limit($ns->body,200)!!}
                                </p>
                                <a class="blog-btn" href="{{route('news')}}">Read more</a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- End single blog -->
                @endforeach
            </div>
        </div>

        <!-- End row -->
    </div>
</div>
<!--End of News Area-->

@endsection