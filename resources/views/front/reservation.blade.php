@extends('layouts.front')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
    input[type="checkbox"] ~ label {
        position: relative;
        padding-left: 22px;
         cursor: pointer;

         display: inline-block!important;
    }
    input[type="radio"], input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0;
        height: 18px!important;
        width: 30px!important;
    }
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
                                            <select class="required select2" onchange="pricechange(this)" name="place" required>
                                                <option value="">Sélectionnez votre lieu</option>
                                               @foreach($place as $row )
                                                <option value="{{$row->id}}">{{$row->place}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-field col-lg-12 select-area display" style="margin-top: 20px; display: none;">

                                                <input type="checkbox"  name="home" onclick="pricehomechange(this)" data-index="0" id="shipping_method_0_free_shipping2" value="0" class="shipping_method home"><label for="shipping_method_0_free_shipping2">Veux-tu être à la maison</label>

                                        </div>
                                        <div class="input-field col-lg-12 select-area display1" style="margin-top: 20px; display: none;">
                                            <input class="required"  type="text" placeholder="Votre adresse complète" name="address" value="" >
                                        </div>
                                        <div class="input-field col-lg-12" style="margin-top: 20px;">
                                            <input class="required price" id="price" type="text" name="price" value="{{$price-(($price/100)*$discount)}}" readonly>
                                        </div>

                                        <div class="col-lg-12" style="margin-top: 20px;">
                                            <h5>Sélectionnez les services optionnels</h5>

                                            @foreach($option as $key=> $row)
                                                <input type="checkbox"  name="option[]" onclick="optionPrice(this)"  id="planned_checked" class="checkbox planned_checked{{$row->id}}"  value="{{$row->id}}">{{$row->name}}
                                            @endforeach

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

                                    <div ><label> <b>Titre</b></label><label ><b>:</b></label> <label style="float: right;">{{$title}}</label></div>

                                    <div ><label> <b>Prix</b></label><label ><b>:</b></label> <label style="float: right;" ><del>{{$price}}€</del>  {{$price-(($price/100)*$discount)}}€</label></div>
                                    <div ><label> <b>Remise</b></label><label ><b>:</b></label> <label style="float: right;" >-{{($price/100)*$discount}}€</label></div>
                                    <div style="display: none" class="city"  ><label> <b>Ville Prix</b></label><label ><b>:</b></label> <label style="float: right;" class="cityprice" ></label></div>
                                    <div style="display: none" class="home1"  ><label> <b>Domicile</b></label><label ><b>:</b></label> <label style="float: right;" class="homeprice" ></label></div>
                                    <div class="options"  ></div>
                                    <div style="display: none" class="place"  ><label> <b>Total</b></label><label ><b>:</b></label> <label style="float: right;" class="totalprice" ></label></div>


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
            let x = {{$price-(($price/100)*$discount)}};
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

                    $(".place").show();
                    $(".display").show();
                    $(".totalprice").html(finalprice+'€');
                    $(".city").show();
                    $(".cityprice").html(price+'€');
                    $(".price").val(finalprice);
                    $(".home").val(id);
                    x=0;
                },
            });


        }
    </script>
    <script>
        function pricehomechange(elem) {

            let id = elem.value;
            let x =  $(".totalprice").html();
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{route('fetchcityhome')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){

                    let price =  response.price;
                    let finalprice = parseInt(x)+parseInt(price);
                    $(".home1").show();
                    $(".homeprice").html(price+'€');
                    $(".display1").show();
                    $(".totalprice").html(finalprice+'€');
                    $(".price").val(finalprice);

                    x=0;
                },
            });
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function optionPrice(elem) {

            let id = elem.value;
            let x =  $(".price").val();


            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchoptions')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){
                    let optionPrice = response.price;
                    let optionid =response.id;
                    let optionName = response.name;
                    if($(".planned_checked"+id).prop('checked')) {
                        $('.options').append(' <div class="hide'+optionid+'"><label> <b >'+optionName+'</b></label><label ><b>:</b></label> <label style="float: right;" class="getprice'+optionid+'" >'+optionPrice+'€</label></div>');
                        let finalprice = parseInt(x)+parseInt(optionPrice);

                        $(".totalprice").html(finalprice+'€');
                        $(".price").val(finalprice);
                        x=0;
                    } else {

                        // input price
                        let price = $(".price").val();
                        //select price
                       let getprice = $(".getprice"+optionid).text();
                        let finalprice = parseInt(price)-parseInt(getprice);
                        $(".totalprice").html(finalprice+'€');
                        $(".price").val(finalprice);
                        $(".hide"+optionid).hide();
                    }



                },
            });

        }
    </script>

@endsection
