@extends('layouts.front')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

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
                                    <form action="{{route('front.reservation.store')}}" method="post" class="row" >
                                        @csrf


                                        <div class="input-field col-lg-12">
                                            <input class="required " type="date" name="date" required>
                                        </div>
                                        <div class="input-field col-lg-12 select-area">
                                            <select class="required" name="time" required>
                                                <option value="">Sélectionnez l'heure</option>

                                                <option value="1:00">1:00</option>
                                                <option value="2:00">2:00</option>
                                                <option value="3:00">3:00</option>
                                                <option value="4:00">4:00</option>
                                                <option value="5:00">5:00</option>
                                                <option value="6:00">6:00</option>
                                                <option value="8:00">7:00</option>
                                                <option value="1:00-2:00">8:00</option>
                                                <option value="9:00">9:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                                <option value="20:00">20:00</option>
                                                <option value="21:00">21:00</option>
                                                <option value="22:00">22:00</option>
                                                <option value="23:00">23:00</option>
                                                <option value="24:00">24:00</option>

                                            </select>
                                        </div>
                                        <div class="input-field col-lg-12 select-area" style="margin-top: 20px;">
                                            <select class="required select2" onchange="pricechange(this)" name="price2" required>
                                                <option value="">Sélectionnez votre lieu</option>
                                               @foreach($place as $row )
                                                <option value="{{$row->id}}">{{$row->place}}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="input-field col-lg-12" style="margin-top: 20px;">
                                            <input class="required price" id="price" type="number" name="price" value="{{$price}}" readonly>
                                        </div>
                                        <div class="input-field col-lg-12 select-area" style="margin-top: 20px;">
                                            <select class="required select2" onchange="pricechange2(this)" name="option" >
                                                <option value="">Sélectionnez les services optionnels</option>
                                                @foreach($option as $row )
                                                    <option value="{{$row->price}}">{{$row->name}}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <input type="hidden" value="{{$title}}" name="title">
                                        <input type="hidden" value="{{$id}}" name="id">
                                        <div class="input-field col-lg-12" style="margin-top: 20px;">
                                            @auth
                                                <button  type="submit" class="btn btn-default" >Vérifier la réservation</button>
                                            @else
                                                <a href="{{route('login')}}" class="btn btn-default">Vérifier la réservation </a>
                                            @endif
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="woocommerce-checkout-review-order checkout_page_only" id="order_review">

                                    <div ><label> <b>Titre</b></label><label ><b>:</b></label> <label style="margin-left: 70px;">{{$title}}</label></div>

                                    <div ><label> <b>Facture</b></label><label ><b>:</b></label> <label style="margin-left: 70px;">{{$price}}€</label></div>
                                    <div ><label> <b>Désactivé</b></label><label ><b>:</b></label> <label style="margin-left: 70px;">- {{($price/100)*$discount}}€</label></div>
                                    <div ><label> <b>Remise</b></label><label ><b>:</b></label> <label style="margin-left: 70px;">{{$price - ($price/100)*$discount}} [{{$discount}}%]</label></div>

                                    <div ><label> <b>50 % de salaire</b></label><label ><b>:</b></label> <label style="margin-left: 70px;">{{($price - ($price/100)*$discount)*0.50}}€</label></div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Contact Form Section -->

    <script>
        function pricechange(elem) {

            let id = elem.value;
            let x = {{$price}};
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchsubcategory')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){
                   let price =  response.price;
                    let finalprice = parseInt(x)+parseInt(price);
                    $(".price").val(finalprice);
                    x=0;
                },
            });


        }
    </script>
    <script>
        function pricechange2(elem) {

            let id = elem.value;
            let x=0;
             x =  $(".price").val();
            let finalprice = parseInt(x)+parseInt(id);
            $(".price").val(finalprice);
            x=0;

        }
    </script>
@endsection
