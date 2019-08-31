@extends('client.layouts.app')

@section('css')
@endsection
@section('title')Հետադարձ կապ@endsection
@section('content')


    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url({{asset('images/background/contact_us.jpg')}});">
        <div class="container">
            <div class="title-text">
                <h1>Հետադարձ կապ</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{route('index')}}">Գլխավոր&nbsp;/</a>
                    </li>
                    <li>Հետադարձ կապ</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--==================================
    =            Contact Form            =
    ===================================-->
    <section class="section contact">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="fa fa-map-o"></i>
                            <div class="media-body">
                                <h3>Հասցե`</h3>
                                <p>ք.Երևան, Վիլնյուսի 75/96
                                    <br> Հայաստան, Երևան 0059
                                </p>

                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fa fa-phone"></i>
                            <div class="media-body">
                                <h3>Հեռ.`</h3>
                                <p>
                                    + (374) 55 - 02 - 92 - 36
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body">
                                <h3>Էլ. հասցե`</h3>
                                <p>
                                    info00house@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-info-circle"></i>
                            <div class="media-body">
                                <h3>Իրավական տեղեկատվություն.</h3>
                                <p>
                                    «Ինֆո հաուս» ՀԿ <br>
                                    Նախագահ՝ Արմինե Աբրահամյան<br>
                                    Հասցե` ք.Երևան, Վիլնյուսի 75/96<br>
                                    ՀՎՀՀ` 02606519<br>
                                    Հ/Հ 1930 0695 1480 0100 «Կոնվերս Բանկ» ՓԲԸ
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3960.734982917006!2d44.563871927801415!3d40.17265230477922!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1566084415383!5m2!1sru!2s"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
@endsection

@section('scripts')
@endsection
