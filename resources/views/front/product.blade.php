@extends('layouts.front')
@section('content')
    <br>
    <br>
    <br>
    <!-- Begin:: Single Products Section -->
    <section class="singleProduct">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product_gallery">
                        <ul id="product_gallery" class="gallery_sliders cS-hidden">
                            <li data-thumb="{{asset($product->photo)}}">
                                <div class="pg_item"><img src="{{asset($product->photo)}}" alt="" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_details">
                        <h3>{{$product->title}}</h3>
                        <div class="product_price clearfix">
                                <span class="price">
                                    @if($product->oldprice)
                                    <del><span class="woocommerce-Price-amount amount"><bdi>{{$product->oldprice}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></del>
                                    @endif
                                        <ins><span class="woocommerce-Price-amount amount"><bdi>{{$product->price}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></ins>
                                </span>
                        </div>

                        <div class="pd_excrpt">
{{--                            <p>--}}
{{--                              {{$product->description}}--}}
{{--                            </p>--}}
                        </div>
                        <form method="POST" action="{{route('addtocart')}}">
                            @csrf
                        <div class="cart_quantity clearfix">
                            <div class="quantity quantityd clearfix">
                                <button type="button" class="minus qtyBtn btnMinus">-</button>
                                <input type="number" class="carqty input-text qty text" name="quantity" value="1">
                                <button type="button" class="plus qtyBtn btnPlus">+</button>
                            </div>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button type="submit" class="mo_btn"><i class="icofont-cart-alt"></i>Ajouter au panier</button>
                        </div>
                        </form>
                        <div class="pro_meta clearfix">
                            <h5>Info</h5>
                            <div class="mtItem">
                                SKU: {{$product->sku}}
                            </div>
                            <div class="mtItem">
                                Catégorie: <a href="">{{$product->category->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_tabarea">
                        <ul class="nav nav-tabs productTabs" id="productTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="pdtci_content">
                                    <p>
                                      {{$product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Single Products Section -->
@endsection
