@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Tous les clients ordres</strong>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Téléphone</th>
                                <th>Total</th>
                                <th>Statut</th>
                                <th>Website</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $row)
                                <tr>
                                    <td>{{$row->order_number}}</td>
                                    <td>{{$row->fname}} {{$row->lname}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>
                                        @if($row->total == '0')
                                            Points
                                        @else
                                            {{$row->total}} €
                                        @endif
                                    </td>
                                    <td>
                                        @if($row->status == '0')
                                            Nouvelle commande
                                        @else
                                            Compléter
                                        @endif
                                    </td>
                                    <td>{{$row->website}}</td>
                                    <td>
                                        <a href="{{route('admin.order.view' , ['id'=>$row->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View">
                                            <i class="material-icons">remove_red_eye</i>
                                        </a>
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
