@extends('layouts.front')
<style>
    input[type="date"],   .nice-select {
        display: block;
        width: 100%;
        height: 60px;
        background: #fff;
        padding: 0 25px;
        border: none;
        border-radius: 0;
        font-size: 14px;
        line-height: 60px;
        margin: 0 0 20px;
        color: #879296;
        -webkit-filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
        -moz-filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
        filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
    }
</style>
@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Begin:: Contact Form Section -->
    <section class="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="{{asset('front/images/icons/2.png')}}" alt="">
                        <h5 class="primaryFont">{{$offers->title1}}</h5>
                        <h2> Réservez votre <span class="colorPrimary fontWeight400">Réservation</span></h2>
                        @if(Session::has('message'))
                            <span style="text-align: center;  color: red; font-size: 20px;" class="colorPrimary fontWeight400" >{{ Session::get('message') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment_area">
                        <div class="row">

                            <div class="col-lg-8 col-md-7">
                                <div class="appointment_form">

                                    <form action="{{route('reservation.store')}}" method="post" class="row" >
                                        @csrf

                                        <div class="input-field col-lg-6">
                                            <input class="required" type="text" name="fname" value="{{$user->fname}}" placeholder="Prénom" required>
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input class="required" type="text" name="lname" {{$user->lname}} placeholder="Nom de famille" >
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input class="required" type="email" name="email" placeholder="E-mail" required>
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input class="required " type="date" name="date" value="{{$date}}" required readonly>
                                        </div>
                                        <div class="input-field col-lg-6 select-area">
                                            <input type="hidden" value="{{$time}}" name="time">
                                            <input type="hidden" value="{{$offers->id}}" name="offer_id">
                                            <input type="hidden" value="{{$place}}" name="place">
                                            <input type="hidden" value="{{$home}}" name="home">
                                            <select class="required" name="time"  required disabled>
                                                <option value="">Sélectionnez l'heure</option>

                                                <option value="1:00" {{ $time == "1:00" ? 'selected' : '' }}>1:00</option>
                                                <option value="2:00" {{ $time == "2:00" ? 'selected' : '' }}>2:00</option>
                                                <option value="3:00" {{ $time == "3:00" ? 'selected' : '' }}>3:00</option>
                                                <option value="4:00" {{ $time == "4:00" ? 'selected' : '' }}>4:00</option>
                                                <option value="5:00" {{ $time == "5:00" ? 'selected' : '' }}>5:00</option>
                                                <option value="6:00" {{ $time == "6:00" ? 'selected' : '' }}>6:00</option>
                                                <option value="8:00" {{ $time == "7:00" ? 'selected' : '' }}>7:00</option>
                                                <option value="1:00-2:00" {{ $time == "8:00" ? 'selected' : '' }}>8:00</option>
                                                <option value="9:00" {{ $time == "9:00" ? 'selected' : '' }}>9:00</option>
                                                <option value="10:00" {{ $time == "10:00" ? 'selected' : '' }}>10:00</option>
                                                <option value="11:00" {{ $time == "11:00" ? 'selected' : '' }}>11:00</option>
                                                <option value="12:00" {{ $time == "12:00" ? 'selected' : '' }}>12:00</option>
                                                <option value="13:00" {{ $time == "13:00" ? 'selected' : '' }}>13:00</option>
                                                <option value="14:00" {{ $time == "14:00" ? 'selected' : '' }}>14:00</option>
                                                <option value="15:00" {{ $time == "15:00" ? 'selected' : '' }}>15:00</option>
                                                <option value="16:00" {{ $time == "16:00" ? 'selected' : '' }}>16:00</option>
                                                <option value="17:00" {{ $time == "17:00" ? 'selected' : '' }}>17:00</option>
                                                <option value="18:00" {{ $time == "18:00" ? 'selected' : '' }}>18:00</option>
                                                <option value="19:00" {{ $time == "19:00" ? 'selected' : '' }}>19:00</option>
                                                <option value="20:00" {{ $time == "20:00" ? 'selected' : '' }}>20:00</option>
                                                <option value="21:00" {{ $time == "21:00" ? 'selected' : '' }}>21:00</option>
                                                <option value="22:00" {{ $time == "22:00" ? 'selected' : '' }}>22:00</option>
                                                <option value="23:00" {{ $time == "23:00" ? 'selected' : '' }}>23:00</option>
                                                <option value="24:00" {{ $time == "24:00" ? 'selected' : '' }}>24:00</option>

                                            </select>
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input type="number" name="phone" placeholder="Téléphone" required>
                                        </div>

                                        <div class="input-field col-lg-12">
                                            <textarea class="required" name="address" placeholder="Votre adresse" required></textarea>
                                        </div>
                                        <div class="input-field col-lg-12" style="margin-top: 20px; margin-left: 250px;">

                                            <div class="con_message"></div>
                                        </div>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="woocommerce-checkout-review-order checkout_page_only" id="order_review">

                                    <div ><label> <b>Title</b></label><label ><b>:</b></label> <label style="float: right">{{$title}}</label></div>
                                    <input type="hidden" name="mtitle" value="{{$title}}">
                                    <div ><label> <b>Facture</b></label><label ><b>:</b></label> <label style="float: right">{{$price}}€</label></div>
                                    <input type="hidden" name="tprice" value="{{$price}}">
                                    <div ><label> <b>50 %  salaire</b></label><label ><b>:</b></label> <label style="float: right">{{$newPrice}}€</label></div>
                                    <input type="hidden" name="pay_price" value="{{$newPrice}}">
                                    <div ><label> <b>Restante</b></label><label ><b>:</b></label> <label style="float: right">{{$price -$newPrice }}€</label></div>
                                    <input type="hidden" name="rprice" value="{{$price -$newPrice }}">
                                    <input type="hidden" name="address" value="{{$address }}">
                                    <input type="hidden" name="option" value="{{$options }}">
                                    <div ><label> <b>Facture</b></label><label ><b>:</b></label> <label style="float: right">{{$newPrice }}€</label></div>
                                    <div class="woocommerce-checkout-payment" id="payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_bacs">
                                                <input checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs" type="radio">
                                                <label for="payment_method_bacs">Payez via votre carte</label>
                                                <div class="payment_box payment_method_bacs visibales">
                                                    <div class="payment-method">
                                                        <div class="payment-accordion">
                                                            <div class="order-button-payment">
                                                                <div class="clearfix">
                                                                    <label>Moyen de paiement <span class="required">*</span></label>
                                                                    <select name="pay" class="form-control" id="pay">
                                                                        <option value="complete">Payer par carte bancaire</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group stripe-payment-method-div">
                                                                    <label>{{ __('Carte bancaire') }}</label> <span class="text-danger">*</span>
                                                                    <div id="card-element"></div>
                                                                    <div id="card-errors" class="text-danger" role="alert"></div>
                                                                </div>
                                                                <input id="card-button" value="Payer" type="submit" class="btn btn-default" data-secret="{{ $intent }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Contact Form Section -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";
    </script>
    <script src="{{asset('js/stripe.js')}}"></script>

@endsection
