@extends('layouts.front')
@section('content')

    <!-- Begin:: Banner Section -->
    <section class="page_banner">
        <div class="layer_img move_anim animated">
{{--            <img src="{{asset('front/images/bg/page_layer.png')}}" alt=""/>--}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="banner-title">Des offres</h2>
                    <p class="breadcrumbs"><a href="{{route('front.index')}}">ACCUEIL</a><span>/</span>Des offres</p>
                </div>
                <div class="col-lg-6 animated pnl">
                    <div class="page_layer">
                        <img src="{{asset($offers->image ??' ')}}"  style="width: 35pc;" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Banner Section -->


    <!-- Begin:: Pricing Section -->
    <section class="commonSection pricingSection hasBeforeDecoration">
        <div class="layer_img l_03 move_anim">
{{--            <img src="{{asset('front/images/bg/14.png')}}" alt=""/>--}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sectionTitle text-left">
{{--                        <img src="{{asset('front/images/icons/2.png')}}" alt="">--}}
                        <h3 class="primaryFont">{{$offers->title1 ?? ' '}}</h3>

                        <p>
                            {{$offers->description}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Begin:: Service Section -->
            <?php

            $discount = json_decode($offers->discount);
            ?>
                    <div class="row">

                            <div class="col-md-4">
                                @foreach(json_decode($offers->title) as  $key => $item1)
                                <div class="package_item pl_area">
                                    <h5>
                                        <a href="javascript:void(0);">{{$item1 ?? ' '}}  [{{$discount[$key] ?? ' '}}%]</a>
                                    </h5>
                                </div>
                                @endforeach
                            </div>


                                <div class="col-md-4">
                                    @foreach(json_decode($offers->price) as $item)
                                    <div class="package_item pr_area">
                                        <h5>
                                            {{$item ?? ' '}}€
                                        </h5>
                                    </div>
                                    @endforeach
                                </div>
                        <div class="col-md-4">
                            @foreach(json_decode($offers->price) as $key => $item)
                                <div class="package_item pr_area">
                                    <h5>
                                       <a href="{{route('front.pre.reservation',['id'=>$offers->id, 'price'=>$item,'key'=>$key])}}" style="color: white" class="btn btn-default">Réserve</a>
                                    </h5>
                                </div>
                            @endforeach
                        </div>


                    </div>

            <!-- End:: Service Section -->
        </div>
    </section>
    <!-- End:: Pricing Section -->




@endsection
