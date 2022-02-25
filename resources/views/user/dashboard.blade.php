@extends('layouts.front')
@section('content')
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('front/images/6.png')}}" style="width: 100%" alt="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Tableau de bord</button>
                        <a href="{{route('front.products')}}"> <button class="tablinks">Produits</button></a>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Mes Commandes</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Détails du compte</button>
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <button class="tablinks">Sortie</button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                    <div id="London" class="tabcontent">
                        <h3>Bonjour <b>{{Auth::user()->fname}} {{Auth::user()->lname}} , </b></h3>
                            <br>
                        <h3> Bienvenue dans votre espace privé, vous y trouverez tout nos produits. à votre tarif praticiens.</h3>
                        <br>
                        <h3> Vous y touverez egalement vos commandes, et le détails de votre compte.</h3>
                        <br>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <th>COMMANDES</th>
                                    <th>DATE</th>
                                    <th>STATUT</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                                @foreach($orders as $row)
                                    <tr>
                                        <td><a class="account-order-id" href="javascript:void(0)">#{{$row->order_number}}</a></td>
                                        <td>{{$row->created_at->format('d-m-y')}}</td>
                                        <td>
                                            @if($row->status == '0')
                                                Nouvelle commande
                                            @else
                                                Compléter
                                            @endif
                                        </td>
                                        <td>{{$row->total}} €</td>
                                        <td><a href="{{route('user.order-detail', ['id' => $row->id])}}" class="kenne-btn kenne-btn_sm"><span>Veu</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <form action="{{route('user.profileupdate')}}" method="POST" class="kenne-form" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
                            <div class="kenne-form-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prenom*</label>
                                        <input type="text" class="form-control" value="{{$user->fname}}" name="fname" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nom*</label>
                                        <input type="text" class="form-control" value="{{$user->lname}}" name="lname" required>
                                    </div>
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="account-details-lastname">Telephone*</label>
                                    <input type="text" value="{{$user->phone}}" name="phone" required>
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="account-details-email">Email*</label>
                                    <input type="email" value="{{$user->email}}" name="email" readonly>
                                </div>
                                <div class="single-input">
                                    <label for="account-details-email">Adresse*</label>
                                    <input type="text" value="{{$user->address}}" name="address" required>
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="account-details-email">Pays*</label>
                                    <input type="text" name="country" value="{{$user->country}}">
                                </div>
<!--                                <div class="single-input single-input-half">
                                    <label for="account-details-email">Photo*</label>
                                    <input type="file" name="photo">
                                </div>-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Mot de passe actuel (laisser vide pour laisser
                                            inchangé)</label>
                                        <input type="password" name="oldpassword">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nouveau mot de passe (laisser vide pour laisser
                                            inchangé)</label>
                                        <input type="password" name="newpassword">
                                    </div>
                                </div>
                                <div class="single-input">
                                    <button class="btn btn-primary" type="submit"><span>SAUVEGARDER
                                                    CHANGEMENTS</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
