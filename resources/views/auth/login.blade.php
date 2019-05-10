@extends('user/app')

@section('title','Home | WNB Consultant')

@section('main-content')
<div class="contact-page area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-head">
					<h3>Login here</h3>
					<p>Please help us respond to your comment by supplying the following details.</p>
					
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

