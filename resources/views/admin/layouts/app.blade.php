@if (Auth::guest())
@include('auth.login')
@else
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            {{ config('app.name') }}
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="admin-config" content='{!! script_config()->toJson() !!}'/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    @yield('css')
</head>
<body class='scrollbar-inner'>
<main role="main" class="main-dashboard" id="app">
    @include('admin.layouts.left_menu')

    <header class="sticky-top">
        <a class="navbar-brand logo" href="#">
            <img src="{{ asset('images/client/images/logo.png') }}" alt="Logo">
            <span class="d-none">@php(config('app.name'))</span>
        </a>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-profile  d-none">
                <div class="nav-profile-img">
                    <div class="user-face" style="background-image: url('{{ asset("images/avatar.png") }}')">
                        <i class="fas fa-circle status online"></i>
                    </div>
                    <p>Hello {!! Auth::user()->name or "User" !!}!</p>
                </div>
            </li>
            <li class="dropdown notification-msg d-none">
                <a data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-bell fa-fw"></i>
                    <i class="fas fa-circle status-alert "></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul>
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li>
                            <a href="#">
                            <span class="media-left media-icon">
                                <div class="user-img"
                                     style="background-image: url('{{ asset("assets/img/avatar-1.png") }}');">
                                </div>
                            </span>
                                <div class="media-body">
                                    <span class="block">Lisa sent you a mail</span>
                                    <span class="text-muted block-time">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="not-footer">
                            <a href="#!">See all notifications.</a>
                        </li>
                    </ul>
                </div>
                <!-- /.dropdown-alerts -->
            </li>
            {{--<li class="dropdown user-menu">--}}
                {{--<a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown"--}}
                   {{--aria-haspopup="false"--}}
                   {{--aria-expanded="false">--}}
                    {{--<i class="fas fa-bars"></i>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-right">--}}
                    {{--<a href="#" class="d-none">--}}
                        {{--<i class="fas fa-user"></i> {!! Auth::user()->name or "User" !!}--}}
                    {{--</a>--}}
                    {{--<a href="{{ route('dashboard') }}"><i class="fas fa-columns"></i> Dashboard</a>--}}
                    {{--<a href="{{route('admin.logout')    }} "--}}
                       {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                        {{--<i class="fas fa-power-off"></i> Logout</a>--}}
                    {{--</a>--}}
                    {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                        {{--{{ csrf_field() }}--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
    </header>
    <div class="page-wrapper">
        @yield('content')
    </div>
</main>


{!! Html::script(mix('js/manifest.js')) !!}
{!! Html::script(mix('js/vendor.js')) !!}
{!! Html::script(mix('js/app.js')) !!}

@yield('scripts')

</body>
</html>
@endif
