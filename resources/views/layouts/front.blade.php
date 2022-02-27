<!DOCTYPE html>
<html lang="en">
<?php
$gs = \App\Website::find(1);
?>
<head>
    <title>{{$gs->sitename}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clean Beauty Spa with predefined web elements which helps you to build your own site. These template is suitable for spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures.">
    <meta name="keywords" content="spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures">
    <meta name="author" content="ThemeWar">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/icofont.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nounicon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/makeover-icon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/jquery.datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightcase.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightslider.css')}}"/>

    <!-- Revolution Slider Setting CSS -->
    <link rel="stylesheet" href="{{asset('front/css/settings.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/preset.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/ignore_for_wp.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
    <!-- End Include All CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{asset('front/images/favicon.png')}}">
    <!-- Favicon Icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .btn-default{
            background-color: #f7a392;
            color: white;
        }
        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 20%;
            height: auto;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #f7a392;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
            border-left: none;
            height: auto;
        }
        .mobileslider{
            display: none;
        }
        .actionBox{
            position: relative;
            background: url({{asset($gs->mimage1)}}) no-repeat right bottom #f0f0f1;
            min-height: 274px;
            padding: 54px 0 65px 55px;

            transition: all ease 400ms;
            -moz-transition: all ease 400ms;
            -webkit-transition: all ease 400ms;
        }
        .abBg2{
            background: url({{asset($gs->mimage2)}}) no-repeat right bottom #e9f9fd;
        }
        .footer_01 {
            position: relative;
            overflow: hidden;
            padding: 20px 0 20px !important;
        }
        @media only screen and (max-width: 600px) {
            .slider_01{
                display: none;
            }
            .mobileslider{
                display: block;
            }
            .mySlides {display:none;}
            #mission{
                padding-top: 50px;
            }
            .tab{
                width: 100%;
            }
            .tabcontent{
                width: 100%;
            }
        }
        .mainMenu {
            position: relative;
            line-height: .8;
            padding: 37px 0 0 0px;
        }
        .header-transparent {
            background-color: rgba(0,0,0,0.7);
        }
        .mainMenu ul li a {
            display: block;
            font-size: 16px;
            line-height: .8;
            color: white !important;
            font-weight: 500;
            font-family: 'Playfair Display', serif;
            position: relative;
        }
        .header_01.fixedHeader {

            background: black !important;

        }
        .mainMenu {
            position: relative;
            line-height: .8;
            padding: 37px 0 0 0px;
        }
        @media (max-width: 1023px) {
            .header_03 .mainMenu, .mainMenu {

                background: #141313 !important;

            }
        }


    </style>
</head>
<body>


<!-- Begin:: Header Section -->
<header class="header_01 isSticky header-transparent" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 cusLogo">
                <div class="logo">
                    <a href="{{route('front.index')}}">
                        <img src="{{asset($gs->logo)}}" alt="Makeover"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 menu-col">
                <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i></a>
                <nav class="mainMenu">
                    <ul>
                        <li><a href="{{route('front.index')}}" style="font-size: 12px;">Accueil</a></li>
                        <li><a href="{{route('front.index')}}#mission" style="font-size: 12px;">Notre Mission</a></li>
                        <li><a href="{{route('front.index')}}#offers" style="font-size: 12px;">Nos Offres</a></li>
                        <li><a href="{{route('front.index')}}#about" style="font-size: 12px;">À propos</a></li>
                        <li><a href="{{route('front.index')}}#blog" style="font-size: 12px;">Galerie</a></li>
                        <li><a href="{{route('front.index')}}#réservation" style="font-size: 12px;">Réservation</a></li>
                        <li><a href="{{route('front.contact')}}" style="font-size: 12px;">Contacts</a></li>
                        @auth
                            <li><a href="{{route('user.dashboard')}}" style="font-size: 12px;">{{Auth::user()->fname.' '.Auth::user()->lname}}</a>
{{--                                <ul aria-expanded="false">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();"--}}
{{--                                           class="dropdown-item ai-icon">--}}
{{--                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>--}}
{{--                                            <span class="ml-2">--}}
{{--                                    Sortir--}}
{{--                                    </span>--}}
{{--                                        </a>--}}
{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </li>
                        @else
                            <li><a href="{{route('login')}}" style="font-size: 12px;">Connexion</a></li>
                        @endauth
{{--                        @guest--}}
{{--                        <li><a href="{{route('front.index')}}#espace">Espace Praticien</a></li>--}}
{{--                        @endguest--}}
{{--                        @auth--}}
{{--                        <li><a href="{{route('user.dashboard')}}">Espace Praticien</a></li>--}}
{{--                        @endauth--}}
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 navCus">
                <div class="navAccess">
                    <a href="javascript:void(0);" class="humBurger"><span></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End:: Header Section -->

<!-- popup sidebar widget -->
<section class="popup_sidebar_sec">
    <div class="popup_sidebar_overlay"></div>
    <div class="widget_area">
        <a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
        <div class="center_align">
            <div class="about_widget_area">
                <div class="wd_logo">
                    <a href="{{route('front.index')}}"><img src="{{asset($gs->logo)}}" alt="makeover"/></a>
                </div>
                <p>
                   {{$gs->footer_text}}
                </p>
                <div class="icon_box_04">
                    <i class="noun-noun_call_1624888"></i>
                    <h4>Telephone</h4>
                    <p>{{$gs->phone}}</p>
                </div>
                <div class="icon_box_04">
                    <i class="noun-noun_Email_485891"></i>
                    <h4>Email</h4>
                    <p>{{$gs->email}}</p>
                </div>
                <div class="icon_box_04">
                    <i class="noun-noun_Address_1271842"></i>
                    <h4>Adresse</h4>
                    <p>{{$gs->address}}</p>
                </div>
                <div class="social_item">
                    <a href="{{$gs->facebook}}"><i class="icofont-facebook"></i></a>
                    <a href="{{$gs->instagram}}"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popup sidebar widget -->
@yield('content')


<!-- Begin:: Footer Section -->
<footer class="footer_01">
    <div class="layer_img move_anim_two">
        <img src="{{asset($gs->footer_logo)}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <aside class="widget about_widget">
                    <h3 class="widget_title">À propos de nous</h3>
                    <p>
                        {{$gs->footer_text}}
                    </p>
                    <a href="#" class="mo_btn mob_lg"><i class="icofont-long-arrow-right"></i>Lire la suite</a>
                </aside>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <aside class="widget">
                    <h3 class="widget_title">Bulletin</h3>
                    <p>
                        Entrez votre adresse e-mail pour obtenir les dernières mises à jour et offres de notre part.
                    </p>
                    <form action="#" method="post">
                        <div class="mc4wp-form-fields">
                            <input type="email" name="EMAIL" placeholder="Entrer votre Email">
                            <button type="submit"><i class="icofont-long-arrow-right"></i></button>
                        </div>
                    </form>
                </aside>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-3 offset-xl-1">
                <aside class="widget">
                    <h3 class="widget_title">Nous contacter</h3>
                    <div class="info_box">
                        <i class="icofont-location-pin"></i>
                        <p>{{$gs->address}}</p>
                    </div>
                    <div class="info_box">
                        <i class="icofont-phone"></i>
                        <p>Ligne d'assistance 24/7<br>{{$gs->phone}}</p>
                    </div>
                    <div class="info_box">
                        <i class="icofont-clock-time"></i>
                        <p>{{$gs->time}}</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>© 2021 <a href="http://ikaedigital.com" target="_blank" rel="noopener">Ikae Digital</a> . All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
                <div class="copy_social">
                    <a target="_blank" href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="icofont-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Footer Section -->

<!-- Bact To Top -->
<a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
<!-- Bact To Top -->

<!-- Start Include All JS -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.appear.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
<script src="{{asset('front/js/gmaps.js')}}"></script>
<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('front/js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('front/js/slick.js')}}"></script>
<script src="{{asset('front/js/lightcase.js')}}"></script>
<script src="{{asset('front/js/lightslider.js')}}"></script>
<script src="{{asset('front/js/tweenmax.min.js')}}"></script>
<script src="{{asset('front/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{asset('front/js/ResizeSensor.min.js')}}"></script>

<!-- Slider Revolution Main Files -->
<script src="{{asset('front/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider Revolution Extension -->
<script src="{{asset('front/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.video.min.js')}}"></script>

<script src="{{asset('front/js/theme.js')}}"></script>
<!-- End Include All JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


@yield('script')
</body>
</html>
