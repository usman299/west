@extends('layouts.admin')
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-9 col-sm-12" >
            <div class="card">
                <div class="body text-center">
                   <?php $user = \App\User::where('id','=',$res->user_id)->first();
                   $place = \App\Place::where('id','=',$res->place)->first();
                   ?>
                    <h6>{{$user->fname .' '. $user->lname}}</h6>
                       <h6>Temps : {{$res->time}} </h6>
                       <h6>Date : {{$res->date}} </h6>

                    <small>{{$res->address ?? ' '}},<br> {{$place->place ??' '}} {{$res->phone}}</small>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-sm-12" >
            <div class="card">
                <div class="body text-center">
                    <?php $user = \App\User::where('id','=',$res->user_id)->first();
                    $place = \App\Place::where('id','=',$res->place)->first();
                    ?>
                    <h6>{{$user->fname .' '. $user->lname}}</h6>
                    <h6>Totale : {{$res->tprice}}€ </h6>

                        @if($res->option)
                            @foreach(json_decode($res->option) as $key => $opt)
                                <?php $optt = \App\Options::where('id','=',$opt)->first();?>
                    <h6>{{$key+1}} : {{$optt->name}} </h6>
                        @endforeach
                        @endif



                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Réservation</strong>
                        <a href="#defaultModal" style="float: right" class="btn btn-primary"  data-toggle="modal" data-target="#defaultModal">Ajouter un nouveau
                        </a>
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
@section('modal')
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="defaultModalLabel">Ajouter Prix Restant</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.pending.paymant')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b> Prix Restant</b><span class="text-danger">*</span></label>
                                <br>
                                <input type="number" class="form-control" name="price" placeholder="Prix Restant">
                                <input type="hidden" name="reservation_id" value="{{$r_id}}">
                                <input type="hidden" name="user_id" value="{{$id}}">
                            </div>
                        </div>


                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round waves-effect">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">PROCHE</button>
                </div>
            </div>
        </div>
    </div>
@endsection

