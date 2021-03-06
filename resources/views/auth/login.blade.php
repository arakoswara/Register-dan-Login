@extends('templates.main_template_auth')

@section('content')

	<div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>
			{!! Form::open(['route' => 'do-Login']) !!}
					<div class="form-group has-feedback">
							<input type="email" class="form-control" placeholder="Email" name="email">
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
							<input type="password" class="form-control" placeholder="Password" name="password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
							<!-- <div class="col-xs-8">
									<div class="checkbox icheck">
											<label>
											<input type="checkbox"> Remember Me
											</label>
									</div>
							</div> -->
							<!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
							</div>
							<!-- /.col -->
					</div>
			{!! Form::close() !!}
			<!-- <div class="social-auth-links text-center">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
					Facebook</a>
					<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
					Google+</a>
			</div>
			<a href="#">I forgot my password</a><br>
			<a href="register.html" class="text-center">Register a new membership</a> -->

				<!-- <form action="{{ URL::to('resize') }}" method="post" enctype="multipart/form-data">
					<label>Select image to upload:</label>
				    <input type="file" accept="image/*" name="photo" id="file" enctype="multipart/form-data">
				    <input type="submit" value="Upload" name="submit">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
				</form> -->
	</div>

@endsection