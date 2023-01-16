@extends('layouts.logreg')
@section('container')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
			      	</div>
					<form action="{{ route('login.auth')}}" method="POST" class="signin-form">
						@csrf

			      	<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="email" required>
			      			<label class="form-control-placeholder"  for="email">Email</label>
			      	</div>
		
		            <div class="form-group">
		              <input id="password-field" type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
		            </div>
		          </form>
		          <p class="text-center">No account? <a data-toggle="tab" href="{{ route('register')}}">Register</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
@endsection

