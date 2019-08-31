@extends('client.layouts.app')

@section('css')
@endsection
@section('title'){{$news?$news->title:'Սխալ հղղում'}}@endsection
@section('meta-tags')
    @if($news)
    <meta name="description" content="{{$news->meta}}">
    <meta property="og:title" content="{{$news->title}}" />
    <meta property="og:image" content="{{$news->main_image?Storage::url('images/news/'.$news->main_image ) : asset('images/empty.jpg') }}" />
    <meta property="og:type" content="website" />
    @endif
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url({{asset('images/background/awareness.png')}});">
        <div class="container">
            <div class="title-text">
                <h1>Լուրեր և Իրադարձություններ</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{route('index')}}">Գլխավոր &nbsp;/</a>
                    </li>
                    <li>Լուրեր և Իրադարձություններ</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section section style-four style-five">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    @if($news)
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a><img src="{{$news->main_image?Storage::url('images/news/'.$news->main_image ) : asset('images/empty.jpg') }}"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="content-text">
                                <a><h5>{{$news->title}}</h5></a>
                                <span>{{\Carbon\Carbon::parse($news->created_at)->format('d M Y')}}</span>
                                <div class="text">
                                    {!! $news->description !!}
                                </div>
                                <div class="social-icons">
                                    <div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="text-center">
                            <h4>
                                Լուրեր և իրադարձություններ այս հղմամբ հասանելի չեն:
                            </h4>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Section -->

@endsection

@section('scripts')
@endsection
