@extends('layouts.admin')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body m-b-10">
                    <ul class="nav nav-tabs padding-0">

                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#List">Réservation</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Addnew">Ajouter nouveau</a></li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="List">
                    <div class="card">
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
                                        <th>Prix ​​restant</th>
                                        <th>Lieu</th>
                                        <th>Domicile</th>
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
                                            <td>{{$row->rprice}}€</td>

                                            <?php $place = \App\Place::where('id','=',$row->place)->first();?>
                                            <td>{{$place->place ?? ' '}}({{$place->price ?? ' '}}€)</td>
                                            @if($row->home==0)
                                                <th>Non</th>
                                            @else
                                                <th>Oui</th>
                                            @endif
                                            @if($row->status==0)
                                                <td>Payer partiellement</td>
                                            @else
                                                <td>Paiement complet</td>
                                            @endif

                                            <td>

                                                    <a href="{{route('reservation.status' , ['id'=>$row->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" >
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <a href="{{route('reservation.history' ,['r_id'=>$row->id,'id'=>$id] )}}" class="btn btn-sm btn-default" data-toggle="tooltip" >
                                                        <i class="zmdi zmdi-eye"></i>
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
                <div class="tab-pane" id="Addnew">

                        <div class="header">
                            <h2><strong>Ajouter </strong> En attente de paiement </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.pending.paymant')}}" method="post"  enctype="multipart/form-data">
                                @csrf
                            <div class="row clearfix">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="reservation_id" class="form-control"  >
                                            <option value="">Sélectionnez la réservation</option>
                                            @foreach($reservation as $row )
                                                @if($row->rprice!=0)
                                            <option value="{{$row->id}}">{{$row->mtitle}}({{$row->rprice}})</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="price" placeholder="Prix Restant">
                                    </div>
                                </div>
                               <input type="hidden" name="user_id" value="{{$id}}">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary btn-round" value="Sauvegarder">

                                </div>
                            </div>
                            </form>
                        </div>

{{--                        <div class="body m-t-10">--}}
{{--                            <div class="row clearfix">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" placeholder="Facebook">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="password" class="form-control" placeholder="Twitter">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="number" class="form-control" placeholder="Linkedin">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="number" class="form-control" placeholder="instagram">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <button class="btn btn-primary btn-round">Save All</button>--}}
{{--                                    <button class="btn btn-primary btn-simple btn-round">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
