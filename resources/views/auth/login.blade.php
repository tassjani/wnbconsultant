@extends('user/app')

@section('title','Login | WNB Consultant')

@section('main-content')

<!-- Start Bottom Header -->
<div class="page-area">
	<div class="breadcumb-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb text-center">
					<div class="section-headline white-headline text-center">
						<h3>Login</h3>
					</div>
					<ul>
						<li class="home-bread">Home</li>
						<li>Login</li>
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
					<h3>Login here</h3>
					<p>Do login here for more exploration</p>
					
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

                        <form method="POST" action="{{ route('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="form-group">
                                <input type="email" placeholder="Username or email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-primary ">Sign me in</button>

                            <a href="{{ route('register') }} " class="btn btn-primary ">Register</a>

                        </fieldset>
                    </form>
                </div>
				 		
				</div>
			</div>
			<!-- End contact Form -->
		</div>
	</div>
</div>
@endsection

