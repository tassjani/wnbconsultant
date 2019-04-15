@extends('user/app')

@section('title','Contact Us | WNB Consultant')


@section('main-content')

<!-- Start Bottom Header -->
<div class="page-area">
	<div class="breadcumb-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb text-center">
					<div class="section-headline white-headline text-center">
						<h3>Contact us</h3>
					</div>
					<ul>
						<li class="home-bread">Home</li>
						<li>Contact us</li>
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
					<h3>Contact us</h3>
					<p>Please help us respond to your comment by supplying the following details.</p>
					<div class="contact-icon">
						<div class="single-contact">
							<h5>Location :</h5>
							<a href="#"><i class="fa fa-map"></i><span>Jl. Bangun Cipta I,Blok F-33 Dukuh,Jakarta Timur</span></a>
							<a href="#"><i class="fa fa-phone"></i><span>+62 877-8926-7402</span></a>
							<a href="#"><i class="fa fa-envelope"></i><span>office@wnbconsultant.com</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End contact icon -->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-form">

					@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
					@endif

					@if(count($errors) > 0)
		              @foreach($errors->all() as $error)
		              <p class="alert alert-danger">{{ $error }} </p>
		              @endforeach
		            @endif

					<div class="row">
				 	<form method="post" action="{{ route('contacts.store') }}" class="contact-form">
				 		{{ csrf_field() }}

				 		<div class="col-md-6 col-sm-6 col-xs-12">
				 			<input type="text" name="name" placeholder="Name" required data-error="Please enter your name">
				 			<div class="help-block with-errors"></div>
				 		</div>

				 		<div class="col-md-6 col-sm-6 col-xs-12">
				 			<input type="email" name="email" placeholder="Email" required data-error="Please enter your email">
				 			<div class="help-block with-errors"></div>
				 		</div>

				 		<div class="col-md-6 col-sm-6 col-xs-12">
				 			<input type="text" name="subject" placeholder="Subject" required data-error="Please enter your subject">
				 			<div class="help-block with-errors"></div>
				 		</div>

				 		<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea id="message" rows="7" placeholder="Massage"  name="message" class="form-control" required data-error="Write your message"></textarea>
								<div class="help-block with-errors"></div>
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<button type="submit" id="submit" class="contact-btn">Submit</button>
							
						</div>
				 		
				 	</form>
					</div>
				 		
				</div>
			</div>
			<!-- End contact Form -->
		</div>
	</div>
</div>
<!-- Start contact Area -->
<div class="map-area">
	<div class="container-full">
		<div class="row">
			<!-- Start contact icon column -->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Start Map -->
				<div class="map-area">
					<div class="gmap_canvas">
						<iframe style="width:100%;height:450px; id="gmap_canvas" src="https://maps.google.com/maps?q=wira%20nusantara%20bumi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>
				    </div>
				<!-- End Map -->
			</div>
		</div>
	</div>
</div>


@endsection