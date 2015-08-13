@extends('layout.master')

@section('contents')
<br><br>

<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Welcome to HPO Asset Inventory System</h1>
        <div class="account-wall">
            <img class="profile-img" src="/img/logo.png"
            alt="">

            <form class="form-signin" action="/auth/login" method="POST">
                {!! csrf_field() !!}
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}"/>
                <input type="password" class="form-control" placeholder="Password" name="password"/>
                <label class="checkbox pull-left">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </form>
        </div>
        <a href="/auth/register" class="text-center new-account">Create an account </a>
    </div>
</div>
@endsection
