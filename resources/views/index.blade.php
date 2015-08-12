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
		<table class="table table-striped table-hover">
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
            <th class="info">Vision</th>
          </tr>
        </thead>
        <tr>
          <td>To be a world class IT BPO Solutions Provider through people’s integrated and innovative ideas.</td>
        </tr>
      </tbody>
    </table>
	</div>
  <div class="login-container" align="right">
    <table>
      <tbody>
        <tr>
          <td>
            
            <div class="jumbotron" align="center">
                <h4>Login</h4>
                {!! Form::open() !!}
                  <div class="form-group">
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}<br>
                    {{-- temporary disabled --}}
                    <!-- {!! Form::submit('login', ['class' => 'btn btn-primary'])  !!} -->
                    <a href="{{ action('DashController@dashboard') }}" class="btn btn-primary">Login</a>
                    <a href="{{ action('DashController@register') }}" class="btn btn-primary">Register</a>
                  </div>
                {!! Form::close() !!}
              </div>

          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
