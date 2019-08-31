@extends('client.layouts.app')

@section('css')
@endsection
@section('title')Լուրեր և Իրադարձություններ @endsection

@section('content')


    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url({{asset('images/background/awareness.png')}});">
        <div class="container">
            <div class="title-text">
                <h1>Լուրեր և իրադարձություններ</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{route('index')}}">Գլխավոր &nbsp;/</a>
                    </li>
                    <li>Լուրեր և իրադարձություններ</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section style-four section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="left-side row">
                        @if($news)
                            @foreach($news as $singleOne)
                                <div class="blog-item col-xs-6">
                                    <div class="image-box">
                                        <figure>
                                            <a href="{{route('single-blog',$singleOne->slug)}}"><img
                                                        src="{{$singleOne->main_image?Storage::url('images/news/'.$singleOne->main_image ) : asset('images/empty.jpg') }}"
                                                        alt="{{$singleOne->slug}}"></a>
                                        </figure>
                                    </div>
                                    <div class="content-text">
                                        <a href="{{route('single-blog',$singleOne->slug)}}">
                                            <h6>{{$singleOne->title}}</h6></a>
                                        <span>{{\Carbon\Carbon::parse($singleOne->created_at)->format('d M Y')}}</span>
                                        <p>{{ str_limit(strip_tags($singleOne->description), $limit = 40, $end = '...') }}</p>
                                        <div class="link-btn">
                                            <a href="{{route('single-blog',$singleOne->slug)}}" class="btn-style-one">Ավելին</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center">
                                <h4>Լուրեր և իրադարձություններ դեռ չկան</h4>
                            </div>
                        @endif
                    </div>
                    {!! $news->links() !!}
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Section -->


@endsection

@section('scripts')
@endsection
