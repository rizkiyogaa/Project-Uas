@extends('layouts.login')

@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">
        <div class="container">

            <!-- Account Logo -->
            <div class="account-logo">
                <a href="index"><img src="img/logo2.png" alt="Dreamguy's Technologies"></a>
            </div>
            <!-- /Account Logo -->

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Login</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <!-- Account Form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Password</label>
                                </div>
                                <div class="col-auto">
                                    <a class="text-muted" href="forgot-password.html">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group text-center">
                            {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary account-btn">Login</a> --}}
                            <button class="btn btn-primary account-btn" type="submit">Login</button>
                        </div>
                        <div class="account-footer">
                            <p>Don't have an account yet? <a href="register">Register</a></p>
                        </div>
                    </form>
                    <!-- /Account Form -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->
@endsection
