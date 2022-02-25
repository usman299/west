@extends('layouts.front')
@section('content')
<!-- Begin:: Slider Section -->
<section class="slider_01">
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset($content->simage1)}}" alt="App Store">
                </li>
                <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset($content->simage2)}}" alt="App Store">
                </li>
                <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset($content->simage3)}}" alt="App Store">
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End:: Slider Section -->
<div class="w3-content w3-display-container mobileslider">
    <img class="mySlides" src="{{asset($content->simage1)}}" style="width:100%; height: 400px">
    <img class="mySlides" src="{{asset($content->simage2)}}" style="width:100%; height: 400px">
    <img class="mySlides" src="{{asset($content->simage3)}}" style="width:100%; height: 400px">

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<!-- Begin:: Welcome Section -->
<section class="commonSection welcomeSection" id="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sectionTitle text-center">
                    <img src="{{asset('front/images/icons/1.png')}}" alt=""/>
                    <h5 class="primaryFont">Notre mission</h5>
                    <h2>{{$content->mtitle1}} <span class="colorPrimary fontWeight400">{{$content->mtitle2}}</span></h2>
                    <p>
                      {{$content->mission}}
                    </p>
                </div>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-6">
                <div class="actionBox">

                </div>
            </div>
            <div class="col-md-6">
                <div class="actionBox abBg2">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Welcome Section -->

<!-- Begin:: Service Section -->
<div class="commonSection serviceSection hasBeforeDecoration hasAfterDecoration" id="offers">
    <div class="layer_img l_01 move_anim">
        <img src="{{asset('front/images/bg/12.png')}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sectionTitle text-center">
                    <img src="{{asset('front/images/icons/2.png')}}" alt=""/>
                    <h5 class="primaryFont">Communauté</h5>
                    <h2>Bien-être Caraïbes</h2>
                    <p>
                        Une rencontre mensuel avec des experts (thérapeutes, fabricants, marketeurs
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="serviceItem_01 text-center">
                    <div class="ib_box">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="167.000000pt" height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                             preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                               fill="#252525" stroke="none">
                                <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                   -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                   1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z"/>
                            </g>
                        </svg>
                        <div class="bg_icon"><i class="mkov-stone"></i></div>
                        <i class="mkov-stone"></i>
                    </div>
                    <p>
                        Une nouvelle <br> thématique <br> développée <br> à chaque rencontre
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="serviceItem_01 sIlg text-center">
                    <div class="ib_box">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="167.000000pt" height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                             preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                               fill="#252525" stroke="none">
                                <path d="M1572 2919 c-708 -80 -1193 -291 -1416 -614 -534 -777 474 -2293
                                   1524 -2292 887 1 1576 436 1644 1037 101 889 -356 1757 -949 1804 -69 5 -160
                                   22 -202 38 -98 37 -396 51 -601 27z"/>
                            </g>
                        </svg>
                        <div class="bg_icon"><i class="mkov-abv"></i></div>
                        <i class="mkov-candle"></i>
                    </div>
                    <p>
                        Networking
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="serviceItem_01 sIlg text-center">
                    <div class="ib_box">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="175.000000pt" height="152.000000pt" viewBox="0 0 175.000000 152.000000"
                             preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,152.000000) scale(0.050000,-0.050000)"
                               fill="#252525" stroke="none">
                                <path d="M1115 2973 c-533 -182 -1118 -1037 -1091 -1597 31 -647 948 -1379
                                   1694 -1351 1127 43 2049 1058 1675 1845 -197 414 -1177 1090 -1581 1090 -27 0
                                   -102 14 -165 30 -170 44 -371 38 -532 -17z"/>
                            </g>
                        </svg>
                        <div class="bg_icon"><i class="mkov-morter"></i></div>
                        <i class="mkov-morter"></i>
                    </div>
                    <p>
                        <A></A>Rifs préférentiels<br>
                        aux formations
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="serviceItem_01 text-center">
                    <div class="ib_box">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="167.000000pt" height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                             preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                               fill="#252525" stroke="none">
                                <path d="M1560 2919 c-1285 -156 -1790 -718 -1459 -1625 305 -836 1087 -1375
                                   1835 -1266 826 122 1314 467 1386 982 122 875 -341 1790 -933 1843 -65 6 -154
                                   24 -198 40 -97 37 -431 51 -631 26z"/>
                            </g>
                        </svg>
                        <div class="bg_icon"><i class="mkov-bottle"></i></div>
                        <i class="mkov-bottle"></i>
                    </div>
                    <p>
                        Oujous informés sur : <br>

                        les nouvelles techniques, <br>

                        les nouveaux produits,<br>

                        les nouveaux outils,
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="layer_img l_02 move_anim_two">
        <img src="{{asset('front/images/bg/11.png')}}" alt=""/>
    </div>
</div>
<!-- End:: Service Section -->
@guest
<!-- Begin:: Espace Section -->
<section class="commonSection aboutSection" id="espace">
    <div class="layer_img move_anim">
        <img src="{{asset('front/images/bg/7.png')}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 noPaddingRight clearfix">
                <div class="aboutImg float-right clearfix">
                    <div class="shape1">
                        <img src="{{asset('front/images/bg/4.png')}}" alt=""/>
                    </div>
                    <div class="shape2">
                        <img src="{{asset('front/images/bg/5.png')}}" alt=""/>
                    </div>
                    <div class="shape3 move_anim_two">
                        <img src="{{asset('front/images/bg/6.png')}}" alt=""/>
                    </div>
                    <div class="abImg float-right">
                        <img src="{{asset('front/images/home_01/1.jpg')}}" alt="Makeover"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="abContent">
                    <h2>
                        Connectez-vous à <span class="fontWeight400 colorPrimary">Votre Compte</span>
                    </h2>
                    <p>
                       Espace Praticien
                    </p>
                    <a href="{{route('login')}}" class="mo_btn mob_lg mob_shadow"><i class="icofont-long-arrow-right"></i>Connexion</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Espace Section -->
@endguest


<!-- Begin:: Appointment Section -->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="video_banner">
                        <img style="width: 100%" src="{{asset($content->vimage)}}" alt=""/>
                        <a href="{{$content->video}}" class="popup_video"><i class="icofont-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Appointment Section -->

<!-- Begin:: About Section -->
<section class="commonSection aboutSection" id="about">
    <div class="layer_img move_anim">
        <img src="{{asset('front/images/bg/7.png')}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 noPaddingRight clearfix">
                <div class="float-right clearfix">
                    <div class=" float-right">
                        <img src="{{asset($content->aboutimage)}}" alt="Makeover"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="abContent">
                    <h2>
                        WEST INDIES

                        <span class="fontWeight400 colorPrimary">CARE</span>
                    </h2>
                    <p>
                      {!! $content->about !!}
                    </p>
                    <a href="#" class="mo_btn mob_lg mob_shadow"><i class="icofont-long-arrow-right"></i>En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: About Section -->
<!-- Begin:: Blog Section -->
<section class="commonSection blogSection" id="blog">
    <div class="layer_img l_04 move_anim">
        <img src="{{asset('front/images/bg/16.png')}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sectionTitle text-center">
                    <img src="{{asset('front/images/icons/2.png')}}" alt="">
                    <h2>BLOG <span class="colorPrimary fontWeight400"></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog_item_01">
                    <img src="{{asset($blog->image)}}" alt=""/>
                    <div class="bp_content">
                        <span>{{$blog->created_at->format('d-m-y')}}</span>
                        <h3><a href="#">{{$blog->title}}</a></h3>
                        <a class="lr_more" href="{{route('blog.view', ['id' => $blog->id])}}">
                            Apprendre encore plus
                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End:: Blog Section -->

@endsection
