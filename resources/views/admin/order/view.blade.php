@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-12 col-lg-4 col-md-6 me-auto">
                            <h5 class="mb-1">{{$order->updated_at}}</h5>
                            <p class="mb-0">Commande {{$order->order_number}}</p>
                        </div>
                        <a href="{{route('admin.order.status', ['id' => $order->id])}}"> <button class="btn alert-success radius-30 px-4">Marquer la commande comme terminée</button></a>

                        <!--<div class="col-12 col-lg-3 col-6 col-md-3">
                          <select class="form-select">
                            <option>Change Status (à venir)</option>
                            <option>Awaiting Payment</option>
                            <option>Confirmed</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                          </select>
                        </div>
                        <div class="col-12 col-lg-3 col-6 col-md-3">
                           <button type="button" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-secondary"><i class="bi bi-printer-fill"></i> Print</button>
                        </div>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="icon-box bg-light-primary border-0">
                                            <i class="bi bi-person text-primary"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-2">Client</h6>
                                            <p class="mb-1">{{$order->fname}} {{$order->lname}}</p>
                                            <p class="mb-1">{{$order->email}}</p>
                                            <p class="mb-1">{{$order->phone}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="icon-box bg-light-success border-0">
                                            <i class="bi bi-truck text-success"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-2">Info commande</h6>
                                            <p class="mb-1"><strong>Livraison</strong> : Colissimo</p>
                                            <p class="mb-1"><strocng>Pay Method</strong> : À venir</p>
                                            <p class="mb-1"><strong>Status</strong> : @if($order->status == '0') Nouvelle commande @else Compléter @endif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="icon-box bg-light-danger border-0">
                                            <i class="bi bi-geo-alt text-danger"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-2">Livraison</h6>
                                            <p class="mb-1"><strong>Note</strong> : {{$order->notes}}</p>
                                            <p class="mb-1"><strong>Adresse</strong> : {{$order->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Produit</th>
                                                <th>Quantité</th>
                                                <th>Prix</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(json_decode($order->products) as $item)
                                                <tr>
                                                    <td>
                                                        <div class="orderlist">
                                                            <a class="d-flex align-items-center gap-2" href="javascript:;">
                                                                <div>
                                                                    <p class="mb-0 product-title"><a target="_blank" href="{{route('front.product', ['id' => $item->id])}}"> {{$item->name}}</a></p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{$item->price.'€'}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card border shadow-none bg-light radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div>
                                            <h5 class="mb-0">Résumé de la commande</h5>
                                        </div>
                                        <div class="ms-auto">
                                            <!--<button type="button" class="btn alert-success radius-30 px-4">Confirmed</button>-->
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Frais de livraison</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0">{{$order->shipping.'€' ?? '0'}}</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">TVA (8.5%)</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0"> à venir </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div>
                                            <p class="mb-0">Sous total</p>
                                        </div>
                                        <div class="ms-auto">
                                            <h5 class="mb-0">{{$order->total.'€'}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>

@endsection
