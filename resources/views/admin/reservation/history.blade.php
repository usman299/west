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
                               <th>#</th>
                                <th>Date</th>
                                <th>Payer le prix</th>
                                <th>Prix ​​Restant</th>
                                <th>Prix ​​total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reservation as $key=> $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->pay_price}}€</td>
                                    <td>
                                        {{$row->r_price}}€
                                    </td>
                                    <?php  $res = \App\Reservation::where('id','=',$row->reservation_id)->first();?>
                                    <td>{{$res->tprice}}€ </td>

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

