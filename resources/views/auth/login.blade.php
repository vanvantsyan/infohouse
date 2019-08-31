<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
<div class="container">
    <div class="login-page">
        <div class="logo col-md-12">
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo"/>
        </div>
        <div class="form-heading col-md-12">
            <h3>Sign in to System</h3>
            <p>Welcome Back. Please login to your account.</p>
        </div>
        <form method="post" action="{{ url('/admin/login') }}" autocomplete="on" method="post" role="form" id="login_form">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="username@gmail.com" value="{!! old('email') !!}">
                <span class="error-mgs" style="display: none;">Please enter email id</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="•••••••••">
                <span class="error-mgs" style="display: none;">Please enter password</span>
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<div class="checkbox-ui">--}}
                            {{--<input type="checkbox" class="" name="remember" id="remember">--}}
                            {{--<label for="remember"> Remember Me</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 forgot-link">--}}
                        {{--<a href="{{ url('/password/reset') }}" class="forgot-password">Forgot Password?</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <button type="submit" name="login-submit" id="login-submit" class="submit-btn">
                    Sign in now <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- TODO make auth only js & css files -->
{!! Html::script(mix('js/manifest.js')) !!}
{!! Html::script(mix('js/vendor.js')) !!}
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
