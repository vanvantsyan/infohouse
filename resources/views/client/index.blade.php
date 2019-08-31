@extends('client.layouts.app')

@section('css')

@endsection
@section('title')Գլխավոր@endsection
@section('content')
    <!--=================================
    =            Page Slider            =
    ==================================-->
    <div class="hero-slider">
        <!-- Slider Item -->
        <div class="slider-item slide1" style="background-image:url({{asset('images/slider/slider-bg-1.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content style text-center">
                            {{--<h2 class="text-white text-bold mb-2">Ձեր տեքստը</h2>--}}
                            {{--<p class="tag-text mb-5">--}}
                                {{--Կարող է լինել. <br>--}}
                                {{--այստեղ</p>--}}
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url({{asset('images/slider/slider-bg-2.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start-->
                        <div class="content style text-right">
                            {{--<h2 class="text-white">Այստեղ <br>նույնպես</h2>--}}
                            {{--<p class="tag-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>--}}
                        </div>
                        <!-- Slide Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url({{asset('images/slider/slider-bg-3.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content text-center style">
                            {{--<h2 class="text-white text-bold mb-2">Այստեղ </h2>--}}
                            {{--<p class="tag-text mb-5">կարող է լինել Ձեր տեքստը--}}
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====  End of Page Slider  ====-->

    <!--Service Section-->
    <section class="service-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Մեր մասին
                </h3>
                <h4>«Ինֆո հաուս» հասարակական կազմակեպությունը նախկինում՝ «Մարդու իրավունքների տուն »հասարակական կազմակերպությունը   ստեղծվել է 2012 թ. Մարտի 1-ին:
                    Այն շահույթ չհետապնդող կազմակերպություն է, որը անհատներին միավորում է կամավոր հիմունքներով: </h4>
                <a href="{{route('about')}}">Ավելին</a>
            </div>
        </div>
    </section>

    <!--testimonial-section-->
    <section class="testimonial-section" style="background: url({{asset('images/testimonials/1.jpg')}});">
        <div class="container">
            <div class="section-title text-center">
                <h3 >Մեր սկզբունքները
                </h3>
            </div>
            <div class="testimonial-carousel">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box text-center">
                        <h3 style="color:dodgerblue">Ճշտապահություն</h3>
                        <p><h4>Մենք միշտ ներկայացնում ենք  ճշմարիտ պատկերը:</h4></p>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box text-center">

                        <h3 style="color:dodgerblue">Ազնվություն</h3>
                        <p><h4>Մենք չենք վախենում մեր  հակառակորդներից ու տարբեր վտանգներից:  </h4></p>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box text-center">

                        <h3 style="color:dodgerblue">Համարձակություն</h3>
                        <p>Մենք պատրաստ ենք ցանկացած ժամանակ ներկայացնել կատարված աշխատանքները    և մանրամասն բացատրել դրա բովանդակությունն ու նշանակությունը: </p>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box text-center">

                        <h3 style="color:dodgerblue">Իրազեկություն</h3>
                        <p>Մենք մտադիր ենք նվազեցնել ապատեղեկատվությունը և իրազեկել յուրաքանչյուրին:   </p>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner-box text-center">
                        <h3 style="color:dodgerblue">Թափանցիկություն</h3>
                        <p>Մենք տալիս ենք խոստումներ միայն այն դեպքում, երբ կարող ենք կատարել դրանք:    </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End testimonial-section-->
    {{--<!--about section-->--}}
    {{--<section class="feature-section section bg-gray">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-12 col-xs-12">--}}
                    {{--<div class="image-content">--}}
                        {{--<div class="section-title text-center">--}}
                            {{--<h3>--}}
                                {{--Մեր սկզբունքները--}}
                            {{--</h3>--}}
                            {{--<p>Հկ-ն ունի իր սկբունքնեը որոնցով առաջնորդվում է </p>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="item">--}}
                                    {{--<h6>Ճշտապահություն</h6>--}}
                                    {{--<p>Մենք միշտ ներկայացնում ենք  ճշմարիտ պատկերը :</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="item">--}}
                                    {{--<h6>Ազնվություն</h6>--}}
                                    {{--<p>Մենք չենք վախենում մեր  հակառակորդներից ու տարբեր վտանգներից:  </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="item">--}}
                                    {{--<h6>Համարձակություն</h6>--}}
                                    {{--<p>Մենք պատրաստ ենք ցանկացած ժամանակ ներկայացնել կատարված աշխատանքները    և մանրամասն բացատրել դրա բովանդակությունն ու նշանակությունը:</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="item">--}}
                                    {{--<h6>Իրազեկություն</h6>--}}
                                    {{--<p>Մենք մտադիր ենք նվազեցնել ապատեղեկատվությունը և իրազեկել յուրաքանչյուրին:   </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="item">--}}
                                    {{--<h6>Թափանցիկություն</h6>--}}
                                    {{--<p>Մենք տալիս ենք խոստումներ միայն այն դեպքում, երբ կարող ենք կատարել դրանք:    </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--End about section-->--}}

     <!--Service Section-->
    <section class="service-section bg-gray section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Լուրեր և Իրադարձություններ
                </h3>
                <p>Այստեղ պատկերված են ամենաթարմ լուրերն և իրադարձությունները</p>
            </div>
            <div class="row items-container clearfix">
                @foreach($news as $singleOne)
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="{{route('single-blog',$singleOne->slug)}}">
                                <img src="{{$singleOne->main_image?Storage::url('images/news/'.$singleOne->main_image ) : asset('images/empty.jpg') }}" alt="{{$singleOne->slug}}" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <span>{{\Carbon\Carbon::parse($singleOne->created_at)->format('d M Y')}}</span>
                            <a href="{{route('single-blog',$singleOne->slug)}}">
                                <h6>{{$singleOne->title}}</h6>
                            </a>
                            <p>{{ str_limit(strip_tags($singleOne->description), $limit = 40, $end = '...') }}
                            </p>
                            <a class="btn btn-main" href="{{route('single-blog',$singleOne->slug)}}">
                                Ավելին
                            </a>

                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    <!--End Service Section-->


@endsection

@section('scripts')

@endsection
