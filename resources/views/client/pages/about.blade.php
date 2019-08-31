@extends('client.layouts.app')

@section('css')
@endsection

@section('title')Մեր մասին@endsection
@section('content')


    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url({{asset("images/background/about.jpg")}});">
        <div class="container">
            <div class="title-text">
                <h1>Մեր մասին</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="{{route('index')}}">Գլխավոր &nbsp;/</a>
                    </li>
                    <li>Մեր մասին</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Our Story -->
    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/services/service-one.jpg" class="responsive" alt="story">
                </div>
                <div class="col-md-6">
                    <div class="story-content">
                                                <h2>Մեր մասին</h2>
                        <h5 class="tagline"></h5>
                        <p>«Ինֆո հաուս» հասարակական կազմակեպությունը նախկինում՝ «Մարդու իրավունքների տուն» հասարակական
                            կազմակերպությունը ստեղծվել է 2012 թ. Մարտի 1-ին: Այն շահույթ չհետապնդող կազմակերպություն է,
                            որը անհատներին միավորում է կամավոր հիմունքներով:
                        </p>
                        <h6>Գործունեություն</h6>
                        <p>«Ինֆո հաուս» ՀԿ-ն զբաղվում է Հայաստանի Հանրապետությունում հասարակության իրազեկվածության
                            բարձրացմամբ :</p>
                        <h6>Սկզբունքներ</h6>
                        <ul class="principals">
                            <li>Ազնվություն ՝ մենք միշտ ներկայացնում ենք ճշմարիտ պատկերը :</li>
                            <li>Համարձակություն ՝ մենք չենք վախենում մեր հակառակորդներից ու տարբեր վտանգներից:</li>
                            <li>Թափանցիկություն՝ մենք պատրաստ ենք ցանկացած ժամանակ ներկայացնել կատարված աշխատանքները և
                                մանրամասն բացատրել դրա բովանդակությունն ու նշանակությունը:
                            </li>
                            <li>Ճշտապահություն՝ մենք տալիս ենք խոստումներ միայն այն դեպքում, երբ կարող ենք կատարել
                                դրանք:
                            </li>
                            <li>Իրազեկություն ՝ Մենք մտադիր ենք նվազեցնել ապատեղեկատվությունը և իրազեկել
                                յուրաքանչյուրին:
                                Շատ կարևոր է, որ լսարանը տեղյակ լինի, թե որտեղից ինչ ինֆորմացիա է ստանում:
                            </li>
                        </ul>

                        <p>«Ինֆո հաուս» -ը կդառնա լավագույն կազմակերպություններից մեկը, որը միջազգային փորձի
                            ուսումնասիրության արդյունքում կմշակի գործիքներ , որոնց միջոցով կհեշտացվի առավել
                            թափանցիկությունը լրատվական դաշտում:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
@endsection
