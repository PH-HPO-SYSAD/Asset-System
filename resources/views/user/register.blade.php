@extends('layout.master')
	<style type="text/css">
		.PinCode{
			margin-top: 100px;
			margin-left: 300px;
			margin-right: 300px;
		}
	</style>
@section('contents')
	<div class="PinCode">
		<div class="jumbotron" align="center">
			<h4>Registration Form</h4>
			<p>Please Fill the required inputs below</p><hr>
			<div class="form-group">
                {!! Form::open() !!}
                	<div class="label-status" align="left">
						<label>Full Name</label>
					</div>
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full Name']) !!}
                    <div class="label-status" align="left">
						<label>Username</label>
					</div>
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                    <div class="label-status" align="left">
						<label>Password</label>
					</div>
					{!! Form::password('conf_pincode', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
					<br>
					<div class="label-status" align="left">
						<label>Account Status</label>
					</div>
					<div class="radio" align="left">
			          <label>
			            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
			            Administrator
			          </label>
			        </div>
					<div class="radio" align="left">
			          <label>
			            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			            Standard User
			          </label>
			        </div>
					<br>
					<!-- Will be used if Detailed Design is Complete{!! Form::submit('Validate', ['class' => 'btn btn-danger']) !!} -->
					<a href="{{ action('DashController@index') }}" class="btn btn-danger">Submit</a>
					<a href="{{ action('DashController@pincode') }}" class="btn btn-primary">Back</a>
					<a href="{{ action('DashController@index') }}" class="btn btn-info">Login Page</a>
                {!! Form::close() !!}
            </div>
		</div>
	</div>
@endsection