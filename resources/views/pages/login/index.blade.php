@extends('layouts.login')

@section('content')
<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">
        <div class="container">

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Login</h3>

                    <!-- Account Form -->
                    <form action="index">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="text">
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
                            <input class="form-control" type="password">
                        </div>
                        <div class="form-group text-center">
														<a href="{{ route('dashboard') }}" class="btn btn-primary account-btn">Login</a>
                            <!-- <button class="btn btn-primary account-btn" type="submit">Login</button> -->
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
