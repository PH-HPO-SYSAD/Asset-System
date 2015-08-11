@extends('layout.master')
@section('contents')
	<div class="jumbo-header">
		<div class="jumbotron" align="center">
			<h2>Sysad Asset Inventory System</h2>
			<p>Helping HPO Outsourcing Inc.</p>
			<a href="#" class="btn btn-primary">Learn More</a>
		</div>
	</div>
	<!-- Login Form -->
	<div class="mission-vision">
		<table class="table table-striped table-hover " align="left">
  <thead>
    <tr class="success">
      <th>Mission</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>To achieve quality and love for work that can only be measured as excellent when dedicated for the Glory of God.</td>
    </tr>
    <thead>
    <tr>
      <th class="info">Vission</th>
    </tr>
  </thead>
    <tr>
      <td>To be a world class IT BPO Solutions Provider through people’s integrated and innovative ideas.</td>
    </tr>
  </tbody>
</table>
	</div>
	<div class="login-container">
        <div id="output"></div>
            <div class="jumbotron" align="center">
            	<h3>Login</h3>
            	<div class="form-group">
                	{!! Form::open() !!}
                    	{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}<br>
						{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
						<a href="{{ action('DashController@pincode') }}" class="btn btn-primary">Register</a>
                	{!! Form::close() !!}
            	</div>
        	</div>
       	</div>
    </div>
	{!! Form::open() !!}
		<div class="form-group">
			<div class="col-sm-8">
				{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}<br>
				{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
				<a href="" class="btn btn-primary">Register</a>
			</div>

		</div>
	{!! Form::close() !!} -->



@endsection
