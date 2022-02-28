@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Réservation</strong>

                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Temps</th>
                                <th>Prix</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reservation as $key=> $row)
                                <tr>
                                    <td>{{$row->fname .' '. $row->lname}}</td>
                                    <td>{{$row->mtitle}}</td>
                                    <td>
                                        {{$row->date}}
                                    </td>
                                    <td>{{$row->time}} </td>
                                    <td>{{$row->tprice}}€</td>
                                    @if($row->status==0)
                                        <td>Payer partiellement</td>
                                    @else
                                        <td>Paiement complet</td>
                                    @endif

                                    <td>
                                        @if($row->status==0)
                                         <a href="{{route('reservation.status' , ['id'=>$row->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" >
                                             <i class="material-icons">brush</i>
                                         </a>
                                        @endif

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

