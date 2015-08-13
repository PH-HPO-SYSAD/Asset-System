@extends('layout.master')

@section('stylesheet')
<style type="text/css">
	.PinCode{
		margin-top: 100px;
		margin-left: 300px;
		margin-right: 300px;
	}
</style>
@endsection

@section('contents')
<div class="PinCode">
	<div class="jumbotron" align="center">
		<h4>Registration Form</h4>
		<p>Please Fill the required inputs below</p><hr>
		<div class="form-group">
			<form action="/auth/register" method="POST">	
				{!! csrf_field() !!}
				<div class="label-status" align="left">
					<label>Full Name</label>
				</div>
				<input type="text" class="form-control" placeholder="Full name" name="name"/>

				<div class="label-status" align="left">
					<label>Username</label>
				</div>
				<input type="text" class="form-control" placeholder="Username" name="username"/>

				<div class="label-status" align="left">
					<label>Password</label>
				</div>
				<input type="password" class="form-control" placeholder="Password" name="password"/>
				
				<div class="label-status" align="left">
					<label>Confirm password</label>
				</div>
				<input type="password" class="form-control" placeholder="Retype password" name="password_confirmation"/>
				
				<br>
				<div class="label-status" align="left">
					<label>Account Type</label>
				</div>
				<div class="radio" align="left">
					<label>
					<input type="radio" name="account_type" id="optionsRadios1" value="admin">
					Administrator
					</label>
		        </div>
				<div class="radio" align="left">
					<label>
					<input type="radio" name="account_type" id="optionsRadios2" value="user">
					Standard User
					</label>
		        </div>

		        <br>
				<!-- Will be used if Detailed Design is Complete{!! Form::submit('Validate', ['class' => 'btn btn-danger']) !!} -->
				
				<button type="submit" class="btn btn-danger">Submit</button>
				<a href="#" class="btn btn-primary">Back</a>
				<a href="/auth/login" class="btn btn-info">Login Page</a>
			</form>

	    </div>
	</div>
</div>
@endsection