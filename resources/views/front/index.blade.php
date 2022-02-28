@extends('layouts.front')
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
                @foreach($offers as $row)
                <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                       <img src="{{asset($row->image)}}" style="width: 200px; height: 150px;">
                        <p style="margin-top: 20px;">
                            <b>{{$row->title1}}</b>
                        </p>
                        <a href="{{route('front.offer',['id'=>$row->id])}}" class="btn btn-default">Réserve</a>
                    </div>
                </div>
                @endforeach

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
                                <img src="{{asset($content->image)}}" alt="Makeover"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="abContent">
                            <h2>
                                Connectez-vous à <span class="fontWeight400 colorPrimary">Votre Compte</span>
                            </h2>
                            <p>
                                Espace prive
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

                            <a href="{{$content->video}}" class="popup_video"><i class="icofont-play"  id="myBtn" class="mybutton1"></i></a>
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
                            Bulles en

                            <span class="fontWeight400 colorPrimary">douc'heure</span>
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
                        <h2>Galerie <span class="colorPrimary fontWeight400"></span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_item_01">
                            <img src="{{asset($blog->image)}}" alt=""/>
                            <div class="bp_content">

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
