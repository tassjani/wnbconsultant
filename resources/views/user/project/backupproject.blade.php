@extends('user/app')

@section('title','Project | WNB Consultant')

@section('main-content')
<div class="page-area">
  <div class="breadcumb-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="breadcrumb text-center">
          <div class="section-headline white-headline text-center">
            <h3>Projects</h3>
          </div>
          <ul>
            <li class="home-bread">Home</li>
            <li>Projects</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Header -->
<!-- Start Project Area -->
<div class="project-area area-padding">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="section-headline text-center">

        <h3>Projects</h3>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="project-inner project-carousel-2">
        <!-- Start Slider Project Area  -->
        <div class="project-image">
         <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="single-project.html">
             <img src="{{asset('user/img/project/7.jpg')}}" alt="">
           </a>
           <div class="add-actions text-center">
            <a class="venobox" data-gall="myGallery" href="img/project/7.jpg">
              <i class="port-icon icon icon-picture"></i>
            </a>
          </div>
        </div>
        <div class="project-dec">
          <h4>TOL CIKOPO - PALIMANAN (CIPALI)</h4>
          <p>JASA KONSULTASI PENGOPERASIAN /CONSULTANT FOR TOLLROAD OPERATION.</p>
        </div>
      </div>
    </div>
    <!-- Slider Project End -->
    <!-- Start Slider Project Area  -->
        <div class="project-image">
         <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="single-project.html">
             <img src="{{asset('user/img/project/7.jpg')}}" alt="">
           </a>
           <div class="add-actions text-center">
            <a class="venobox" data-gall="myGallery" href="img/project/7.jpg">
              <i class="port-icon icon icon-picture"></i>
            </a>
          </div>
        </div>
        <div class="project-dec">
          <h4>2 TOL CIKOPO - PALIMANAN (CIPALI)</h4>
          <p>JASA KONSULTASI PENGOPERASIAN /CONSULTANT FOR TOLLROAD OPERATION.</p>
        </div>
      </div>
    </div>
    <!-- Slider Project End -->
<!-- Start Slider Project Area  -->
        <div class="project-image">
         <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="single-project.html">
             <img src="{{asset('user/img/project/7.jpg')}}" alt="">
           </a>
           <div class="add-actions text-center">
            <a class="venobox" data-gall="myGallery" href="img/project/7.jpg">
              <i class="port-icon icon icon-picture"></i>
            </a>
          </div>
        </div>
        <div class="project-dec">
          <h4>3 TOL CIKOPO - PALIMANAN (CIPALI)</h4>
          <p>JASA KONSULTASI PENGOPERASIAN /CONSULTANT FOR TOLLROAD OPERATION.</p>
        </div>
      </div>
    </div>
    <!-- Slider Project End -->
</div>
</div>
<!-- End Column -->
</div>

</div>
<!-- Start Project Area End-->

@endsection