@extends('user/app')

@section('title','Contact Us | WNB Consultant')

@section('main-content')



		<form id="contactForm" method="post"  action="{{  route('contact.store') }}"  class="contact-form">
							{{ csrf_field() }}
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="name" class="form-control" name="name" placeholder="Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="email" class="email form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="text" id="msg_subject" class="form-control" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
								<div class="help-block with-errors"></div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12">
								<textarea id="message" rows="7" placeholder="Massage"  name="message" class="form-control" required data-error="Write your message"></textarea>
								<div class="help-block with-errors"></div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<button type="submit" id="submit" class="contact-btn">Submit</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div>
							</div> 

						</form> 

@endsection