@extends('user/app')

@section('title','Home | WNB Consultant')


@section('main-content')

<!-- Start Bottom Header -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Welcome to WNB Consultant</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Home</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-head">
                    <h3>Welcome to this page, {{Auth::user()->name}}</h3>
                    
                    
                </div>
            </div>
            <!-- End contact icon -->
            
        </div>
    </div>
</div>

@endsection