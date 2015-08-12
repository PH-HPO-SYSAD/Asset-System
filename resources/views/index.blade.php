@extends('layout.master')
@section('contents')
  <br><br>

  <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Welcome to HPO Asset Inventory System</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://c1.staticflickr.com/3/2361/5817626386_d3c0db3a02_b.jpg"
                    alt="">
                    {!! Form::open(['class' => 'form-signin']) !!}

                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        <a href="{{ action('DashController@dashboard') }}" class="btn btn-lg btn-primary btn-block">Login</a>
                        <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                      Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    {!! Form::close() !!}
                {{-- <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button> --}}
                </form>
            </div>
            <a href="{{ action('DashController@pincode') }}" class="text-center new-account">Create an account </a>
        </div>
    </div>
@endsection
