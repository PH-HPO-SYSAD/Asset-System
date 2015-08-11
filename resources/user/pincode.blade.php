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
			<h4>Request Pincode</h4>
			<p>Please Enter Pin Code to create new account</p>
			<p style="color:green">Admins are only allowed to create new accounts.</p><hr>
			<div class="form-group">
                {!! Form::open() !!}
                    {!! Form::password('pincode', ['class' => 'form-control', 'placeholder' => 'Pin Code']) !!}
					{!! Form::password('conf_pincode', ['class' => 'form-control', 'placeholder' => 'Confirm Pin Code']) !!}<br>
					<!-- Will be used if Detailed Design is Complete{!! Form::submit('Validate', ['class' => 'btn btn-danger']) !!} -->
					<a href="{{ action('DashController@register') }}" class="btn btn-danger">Validate</a>
					<a href="{{ action('DashController@index') }}" class="btn btn-primary">Back</a>
                {!! Form::close() !!}
            </div>
		</div>
	</div>
@endsection