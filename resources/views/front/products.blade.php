@extends('layouts.front')
@section('content')
    @auth
        <!-- Begin:: Products Section -->
        <section class="shopPage">
            <div class="container" style="margin-top: 50px">
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3 col-md-6">
                            <div class="product_item text-center">
                                <div class="pi_thumb">
                                    <img src="{{asset($pro->photo)}}" alt=""/>
                                    <div class="pi_01_actions">
                                        <a href=""><i class="icofont-cart-alt"></i></a>
                                        <a href="{{route('front.product', ['id' => $pro->id])}}"><i class="icofont-eye"></i></a>
                                    </div>
                                </div>
                                <div class="pi_content">
                                    <p><a href="">{{$pro->category->name}}</a></p>
                                    <h3><a href="{{route('front.product', ['id' => $pro->id])}}">{{$pro->title}}</a></h3>
                                    <div class="product_price clearfix">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{$pro->price}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--<div class="row">
                    <div class="col-lg-12">
                        <div class="make_pagination text-center">
                            <span class="current">1</span>
                            <a href="shop.html">2</a>
                            <a href="shop.html">3</a>
                            <a class="next" href="shop.html"><i class="icofont-simple-right"></i></a>
                        </div>
                    </div>
                </div>--}}
            </div>
        </section>
        <!-- End:: Products Section -->
    @endauth
@endsection
