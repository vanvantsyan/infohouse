<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Email PW Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('new-dash/css/main-style.css') }}" />
</head>
<body>
<div class="container">
    <div class="login-page">
        <div class="form-heading col-md-12">
            <h3>Forgot your password?</h3>
            <p>Enter your email and we'll send you a reset link.</p>
        </div>
        <form method="post" action="{{ url('/password/email') }}" autocomplete="on" method="post" role="form" id="reset_pw">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="username@gmail.com" value="{!! old('email') !!}">
                <span class="error-mgs" style="display: none;">Please enter a valid email</span>
            </div>
            <div class="form-group">
                <button type="submit" name="reset-submit" id="reset-submit" class="submit-btn">
                    Send Reset Email <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>
