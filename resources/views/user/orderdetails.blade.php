@extends('layouts.front')
@section('content')

    <div class="container-fluid">
        <div class="row" >
            <div class="col-12" style="margin-top: 100px">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Facture # {{$order->order_number}}
                            <a href="{{route('user.dashboard')}}">
                                <button class="btn btn-default float-right">Retour au tableau de bord</button>
                            </a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row border p-3">
                                    <div class="col-md-6">
                                        <h6><strong>Des produits</strong></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6> <strong>Quantité</strong></h6>
                                    </div>
                                </div>
                                <div class="row border p-3">
                                    @foreach(json_decode($order->products) as $item)
                                        <div class="col-md-6">
                                            <a target="_blank" href="{{route('front.product', ['id' => $item->id])}}"> {{$item->name}}</a>
                                        </div>

                                        <div class="col-md-6">
                                            {{$item->quantity}}
                                        </div>

                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Adresse</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->address}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Nom</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->name}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>E-mail</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->email}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Telephone</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->phone}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Pays</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->country}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Remarques</b>
                            </div>
                            <div class="col-md-6">
                                {{$order->notes}}
                            </div>
                        </div>
                        <div class="row border p-3">
                            <div class="col-md-6">
                                <b>Statut</b>
                            </div>
                            <div class="col-md-6">
                                @if($order->status == '0')
                                    Nouvelle commande
                                @else
                                    Compléter
                                @endif
                            </div>
                        </div>
                        @if(Auth::user()->role == 1)
                            @if($order->status == '0')
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('user.order-status', ['id' => $order->id])}}"><button class="mybutton">Valider la réception de votre commande</button></a>
                                </div>
                            </div>
                            @endif
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
