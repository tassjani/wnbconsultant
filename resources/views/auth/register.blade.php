@extends('user/app')
@section('title','Register | WNB Consultant')



@section('main-content')
<!-- Start Bottom Header -->
<div class="page-area">
	<div class="breadcumb-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb text-center">
					<div class="section-headline white-headline text-center">
						<h3>Register</h3>
					</div>
					<ul>
						<li class="home-bread">Home</li>
						<li>Register</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Header -->
<div class="contact-page area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-head">
					<h3>Register Your Account</h3>
					<p>Create your account here</p>
					
				</div>
			</div>
			<!-- End contact icon -->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-form">
					<div class="panel-body">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }} ">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label">Name</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="name" value="{{ old('name') }}">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">E-Mail Address</label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Confirm Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password_confirmation">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Register
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
			<!-- End contact Form -->
		</div>
	</div>
</div>
@endsection
