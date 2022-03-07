@extends('frontpages/account/layouts/app')
@section('content')
<div id="auth">
        
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo auth-logo-sm-text-center">
                    <a href=""><img src="{{asset('images/udayana2.png')}}" alt="Logo"></a>
                </div>
                <h1 class="auth-title titleforlogin">Log in.</h1>
                <p class="auth-subtitle mb-5">Please Log in with your email and password.</p>
    
                <form action="{{route('login.authenticate')}}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email" name="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
    
            </div>
        </div>
    </div>
    
        </div>
@endsection