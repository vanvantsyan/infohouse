@yield('css')
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Info House ՀԿ | @yield('title')</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{asset('plugins/fancybox/jquery.fancybox.min.css')}}">

    <!-- Stylesheets -->
    <link href="{{asset('css/client.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    @yield('meta-tags')

</head>


<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v4.0"></script>
<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->
    <!--header top-->
    <div class="header-top">
        <div class="container clearfix">
            {{--<div class="top-left">--}}
            {{--<h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>--}}
            {{--</div>--}}
            <div class="top-right">
                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/info00house/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--header top-->

    <!--Header Upper-->
    <section class="header-uper">
        <div class="container clearfix">
            <div class="logo">
                <figure>
                    <a href="{{route('index')}}">
                        <img src="{{asset('images/logo2.png')}}" alt="" width="220">
                    </a>
                </figure>
            </div>
            <div class="right-side">
                <ul class="contact-info">
                    <li class="item">
                        <div class="icon-box">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <strong>Էլ. հասցե</strong>
                        <br>
                        <a href="#">
                            <span>info00house@gmail.com</span>
                        </a>
                    </li>
                    <li class="item">
                        <div class="icon-box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <strong>Հեռ.</strong>
                        <br>
                        <span> + (374) 55 - 02 - 92 - 36 </span>
                    </li>
                </ul>
                {{--
                --}}
            </div>
        </div>
    </section>
    <!--Header Upper-->


    <!--Main Header-->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{!! (Request::is('index') ? 'active' : '') !!}">
                        <a href="{{route('index')}}">Գլխավոր</a>
                    </li>
                    <li class="{!! (Request::is('blog*') ? 'active' : '') !!}">
                        <a href="{{route('blog')}}">Լուրեր և իրադարձություններ</a>
                    </li>
                    <li class="{!! (Request::is('about') ? 'active' : '') !!}">
                        <a href="{{route('about')}}">Մեր մասին</a>
                    </li>
                    <li class="{!! (Request::is('contact') ? 'active' : '') !!}">
                        <a href="{{route('contact')}}">Հետադարձ կապ</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->


    <!-- Start Content -->
@yield('content')
<!-- End Content -->


    <!--footer-main-->
    <footer class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="{{route('index')}}">
                                        <img src="{{asset('images/logo3.jpg')}}" width="200">
                                    </a>
                                </figure>
                            </div>
                            <p>«Ինֆո հաուս» հասարակական կազմակեպություն</p>
                            <ul class="location-link">
                                <li class="item">
                                    <i class="fa fa-map-marker"></i>
                                    <p>ք.Երևան, Վիլնյուսի 75/96</p>
                                </li>
                                <li class="item">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a href="#">
                                        <p>info00house@gmail.com</p>
                                    </a>
                                </li>
                                <li class="item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>+ (374) 55 - 02 - 92 - 36</p>
                                </li>
                            </ul>
                            <ul class="list-inline social-icons">
                                <li><a href="https://www.facebook.com/info00house/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h6>Սկզբունքներ</h6>
                        <ul class="menu-link">
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Ազնվություն
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Համարձակություն
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Թափանցիկություն
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Ճշտապահություն
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Իրազեկություն
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="social-links">
                            <h6>Լուրեր և իրադարձություններ</h6>
                            <ul>
                                @foreach($news as $singleNews)
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{route('single-blog',$singleNews->slug)}}">
                                                    <img class="media-object"
                                                         src="{{Storage::url('images/news/'.$singleNews->main_image)}}"
                                                         alt="{{$singleNews->slug}}" width="80">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading"><a href="#">{{$singleNews->title}}</a></h5>
                                                <span>{{ str_limit(strip_tags($singleNews->description), $limit = 30, $end = '...') }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container clearfix">
                <div class="copyright-text">
                    <p>
                        © 2019 «Ինֆո հաուս» ՀԿ . Բոլոր իրավունքները պաշտպանված են:
                    </p>
                </div>
                <ul class="footer-bottom-link">
                    <li>
                        <a href="{{route('index')}}">Գլխավոր</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">Մեր մասին</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Հետադարձ կապ</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{asset('plugins/jquery.js')}}"></script>
<script src="{{asset('plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select.amin.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{asset('plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<script src="{{asset('plugins/validate.js')}}"></script>
<script src="{{asset('plugins/wow.js')}}"></script>
<script src="{{asset('plugins/jquery-ui.js')}}"></script>
<script src="{{asset('plugins/timePicker.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('scripts')

</body>

</html>

